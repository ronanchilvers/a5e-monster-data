---
statblock: true
name: 'Great Wyrm Black Dragon - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Gargantuan
type: Dragon
cr: 23
ac: 22
hp: 735
hit_dice: '42d20 + 294'
speed: '40 ft., fly 80 ft., swim 40 ft.'
stats:
    - 26
    - 14
    - 24
    - 16
    - 14
    - 18
damage_immunities: acid
saves:
    dexterity: 9
    constitution: 14
    wisdom: 9
    charisma: 11
skillsaves:
    history: 10
    perception: 9
    stealth: 9
senses: 'blindsight 60 ft., darkvision 120 ft., passive Perception 22'
languages: 'Common, Draconic, one more'
traits:
    0: { name: Ambusher, desc: "When submerged in water, the dragon has advantage on Stealth checks. If the dragon hits a creature that can't see it with its bite, it can deal piercing damage and grapple the target simultaneously." }
    1: { name: Amphibious, desc: 'The dragon can breathe air and water.' }
    2: { name: 'Legendary Resistance (3/Day)', desc: 'When the dragon fails a saving throw, it can choose to succeed instead. When it does, it sheds some of its scales, which turn to mud. If it has no more uses of this ability, its Armor Class is reduced to 20 until it finishes a long rest.' }
    3: { name: 'Ruthless (1/Round)', desc: 'After scoring a critical hit on its turn, the dragon can immediately make one claw attack.' }
    4: { name: 'Concentrated Acid (1/Day)', desc: "When the dragon is first bloodied, it immediately recharges its breath weapon, if it's not already available. For the next minute, the dragon's acid becomes immensely more corrosive, ignoring acid resistance and treating acid immunity as acid resistance." }
    5: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 19). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:fog cloud, pass without trace, legend lore, speak with dead', ' 1/day each:create undead, insect plague, time stop']
actions:
    - { name: Multiattack, desc: 'The dragon attacks once with its bite and twice with its claws. In place of its bite attack, it can use Acid Spit.' }
    - { name: Bite, desc: "Melee Weapon Attack: +15 to hit, reach 15 ft., one target. Hit: 30 (4d10 + 8) piercing damage plus 9 (2d8) acid damage. Instead of dealing piercing damage, the dragon can grapple the target (escape DC 23), and a Huge or smaller creature grappled in this way is restrained. While grappling a creature, the dragon can't bite or use Acid Spit against another target." }
    - { name: Claw, desc: 'Melee Weapon Attack: +15 to hit, reach 10 ft., one target. Hit: 21 (3d8 + 8) slashing damage.' }
    - { name: Tail, desc: 'Melee Weapon Attack: +15 to hit, reach 20 ft., one target. Hit: 21 (3d8 + 8) bludgeoning damage, and the dragon pushes the target 10 feet away.' }
    - { name: 'Acid Spit', desc: 'The dragon targets a creature within 60 feet, forcing it to make a DC 22 Dexterity saving throw. The creature takes 22 (4d10) acid damage on a failure or half damage on a success. A creature that fails the save also takes 11 (2d10) ongoing acid damage. A creature can use an action to end the ongoing damage.' }
    - { name: 'Acid Breath (Recharge 56)', desc: 'The dragon exhales sizzling acid in a 90-foot-long, 10-foot-wide line. Each creature in that area makes a DC 22 Dexterity saving throw, taking 85 (19d8) acid damage on a failed save or half damage on a success. A creature that fails the save is blinded until the end of its next turn.' }
reactions:
    - { name: 'Tail Attack', desc: 'When a creature the dragon can see within 10 feet hits the dragon with a melee attack, the dragon makes a tail attack against it.' }
'legendary actions':
    0: { name: 'The dragon can take 3 legendary actions, choosing from the options below', desc: "Only one legendary action can be used at a time and only at the end of another creature's turn. It regains spent legendary actions at the start of its turn." }
    1: { name: Darkness, desc: "The dragon creates a 40-foot-radius sphere of magical darkness originating from a point it can see within 120 feet. Darkvision can't penetrate this darkness. The darkness lasts for 1 minute or until the dragon uses this action again." }
    2: { name: Roar, desc: "Each creature of the dragon's choice within 120 feet that can hear it makes a DC 19 Charisma saving throw. On a failure, it is frightened for 1 minute. A creature repeats the saving throw at the end of its turns, ending the effect on itself on a success. When it succeeds on a saving throw or the effect ends for it, it is immune to Roar for 24 hours." }
    3: { name: 'Wing Attack', desc: 'The dragon beats its wings. Each creature within 15 feet makes a DC 22 Dexterity saving throw. On a failure, it is pushed 10 feet away and knocked prone. The dragon can then fly up to half its fly speed.' }
    'legendary actions': ['The dragon has the following additional legendary actions, which it can use only while bloodied:']
    4: { name: 'Elite Recovery', desc: 'The dragon ends one negative effect currently affecting it. It can do so as long as it has at least 1 hit point, even while unconscious or incapacitated.' }
    5: { name: 'Mortal Terror (Gaze)', desc: 'A creature within 120 feet makes a saving throw against Roar, even if it has already successfully saved within the past 24 hours.' }
    6: { name: 'Caustic Surge (Costs 2 Actions)', desc: 'The dragon recharges its breath weapon.' }
    7: { name: 'Concentrated Decay (Costs 3 Actions)', desc: "The dragon spits a highly concentrated blast of acid at one creature it can see within 90 feet. That creature is affected as if caught in the dragon's breath weapon, rolling to save as usual." }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Great Wyrm Black Dragon - A5E
```
