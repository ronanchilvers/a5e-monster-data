<?php

require("vendor/autoload.php");

use Ronanchilvers\Utility\Str;
use Symfony\Component\Yaml\Yaml;

$dataDir = "./data";
$outputDir = "./markdown";

$filename = null;
if (isset($argv[1])) {
    $filename = $argv[1];
}
$labelDiscard = [
    "Proficiency Bonus",
];
$labelTransform = [
    "Armor Class"          => "ac",
    "Hit Points"           => "hp",
    "Movement"             => "speed",
    "Challenge Rating"     => "cr",
    "Abilities"            => "traits",
    "Damage Immunities"    => "damage_immunities",
    "Damage Resistances"    => "damage_resistances",
    "Condition Immunities" => "condition_immunities",
    "Condition Resistances" => "condition_resistances",
    "Skills"                => 'skillsaves',
    "Saves"                => 'saves',
];
$statLabels = [
    'str' => 'strength',
    'dex' => 'dexterity',
    'con' => 'constitution',
    'int' => 'intelligence',
    'wis' => 'wisdom',
    'cha' => 'charisma',
];

if (!is_dir($dataDir)) {
    echo sprintf("Data directory %s not found\n", $dataDir);
    exit(1);
}

if (!$handle = opendir($dataDir)) {
    echo sprintf("Unable to open data directory %s for reading\n", $dataDir);
    exit (1);
}
while ($entry = readdir($handle)) {
    if (is_dir($dataDir . DIRECTORY_SEPARATOR . $entry)) {
        echo sprintf("Skipping: %s\n", $entry);
        continue;
    }
    if (!is_null($filename) && basename($filename) != $entry) {
        continue;
    }
    // echo sprintf("Processing: %s\n", $entry);
    if (!$json = file_get_contents($dataDir . DIRECTORY_SEPARATOR . $entry)) {
        echo sprintf("Failed reading file: %s\n", $entry);
        continue;
    }
    $json = utf8_encode($json); // Fix invalid encoding
    $json = str_replace(['', ' '], ["'", ""], $json);
    if (!$data = json_decode($json, true)) {
        echo sprintf("Failed decoding json: %s\n", $entry);
        echo sprintf("Decode error: %s\n", json_last_error());
        continue;
    }
    // echo sprintf("Decoded: %s\n", $entry);
    foreach ($data as $item) {
        echo sprintf("Item: %s\n", $item['title']);
        $content = $item["contents"];

        $monsterName = $item['title'];
        $mdFilename = Str::snake($monsterName) . ".md";
        $output = [
            'statblock' => true,
            'name' => sprintf('%s - A5E', $monsterName),
            'source' => 'Level Up: Monstrous Menagerie',
        ];
        $section = null;
        $sectionData = [];
        foreach ($content as $line) {

            $line = explode(' | ', $line, 2);

            switch ($line[0]) {
                case "subtitle":
                    list($size, $type) = explode(" ", $line[1]);
                    $output['size'] = $size;
                    $output['type'] = $type;
                    break;

                case 'property':
                    list($label, $value) = explode(" | ", $line[1]);
                    $label = trim($label, ":");
                    if (in_array($label, $labelDiscard)) {
                        break;;
                    }
                    if (isset($labelTransform[$label])) {
                        $label = $labelTransform[$label];
                    }
                    $label = strtolower($label);

                    switch ($label) {

                        case "ac":
                        case "cr":
                            $value = explode(" ", strip_tags($value));
                            $output[strtolower($label)] = (int) $value[0];
                            break;

                        case "hp":
                            list($hp, $hitDice) = explode("(", $value);
                            @list($hitDice, $bloodied) = explode(";", $hitDice);
                            $output["hp"] = (int) trim($hp);
                            $output["hit_dice"] = trim($hitDice);
                            break;

                        case "saves":
                        case "skillsaves":
                            $saves = explode(',', $value);
                            $value = [];
                            foreach ($saves as $save) {
                                list($stat, $val) = explode(' ', trim($save));
                                $stat = strtolower($stat);
                                if (isset($statLabels[$stat])) {
                                    $stat = $statLabels[$stat];
                                }
                                $value[] = [$stat => (int) $val];
                            }
                            $output[$label] = $value;
                            break;

                        default:
                            $output[$label] = trim(strip_tags($value));
                            break;

                    }
                    break;

                case 'dndstats':
                    $stats = explode(' | ', $line[1]);
                    $stats = array_map(function ($stat) {
                        return (int) $stat;
                    }, $stats);
                    $output['stats'] = $stats;
                    // list($str, $dex, $con, $int, $wis, $cha) = explode(' | ', $line[1]);
                    // $output["stats"] = [
                    //     'str' => $str,
                    //     'dex' => $dex,
                    //     'con' => $con,
                    //     'int' => $int,
                    //     'wis' => $wis,
                    //     'cha' => $cha,
                    // ];
                    break;

                case 'section':
                    if (!is_null($section)) {
                        $output[$section] = $sectionData;
                        $sectionData = [];
                    }
                    $section = $line[1];
                    if (isset($labelTransform[$section])) {
                        $section = $labelTransform[$section];
                    }
                    $section = strtolower($section);
                    break;

                case 'description':
                    list($ability, $description) = explode(" | ", $line[1], 2);
                    if ($ability == "Spellcasting") {
                        $output[$section] = $sectionData;
                        $sectionData = [];
                        $section = "spells";
                        $sectionData[$section][] = $description;
                        break;
                    }
                    $sectionData[] = [
                        "name" => $ability,
                        "desc" => $description,
                    ];
                    break;

                case 'text':
                    $sectionData[$section][] = $line[1];
                    break;

            }

        }
        if (!is_null($section)) {
            $output[$section] = $sectionData;
        }
    }
    $markdown = "---\n";
    $markdown .= Yaml::dump($output) . "\n";
    $markdown .= "---\n";
    $markdown .= "```statblock\nmonster: {$monsterName} - A5E\n```\n";
    $markdownPath = $outputDir . DIRECTORY_SEPARATOR . $mdFilename;
    if (!file_put_contents($markdownPath, $markdown)) {
        echo sprintf("Error: Unable to write markdown to %s\n", $markdownPath);
        exit(1);
    }
}
