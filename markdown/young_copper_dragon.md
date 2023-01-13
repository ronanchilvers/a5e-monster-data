---
statblock: true
name: 'Young Copper Dragon - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Dragon
cr: 9
ac: 17
hp: 144
hit_dice: '17d10 + 51'
speed: '40 ft., climb 40 ft., fly 80 ft.'
stats:
    - 18
    - 12
    - 16
    - 16
    - 12
    - 14
damage_immunities: acid
saves:
    dexterity: 5
    constitution: 7
    wisdom: 5
    charisma: 6
skillsaves:
    deception: 6
    perception: 5
    stealth: 5
senses: 'blindsight 30 ft., darkvision 120 ft., passive Perception 15'
languages: 'Common, Draconic'
traits:
    0: { name: 'Flow Within the Mountain', desc: 'The dragon has advantage on Stealth checks made to hide in mountainous regions.' }
    1: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 15). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:hideous laughter, suggestion']
actions:
    - { name: Multiattack, desc: 'The dragon attacks with its bite and twice with its claws.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +8 to hit, reach 10 ft., one target. Hit: 15 (3d10 + 4) piercing damage plus 4 (1d8) acid damage.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +8 to hit, reach 5 ft., one target. Hit: 13 (2d8 + 4) slashing damage.' }
    - { name: 'Breath Weapons (Recharge 56)', desc: 'The dragon uses one of the following breath weapons:' }
    - { name: 'Acid Breath', desc: 'The dragon exhales acid in a 40-foot-long, 5-foot wide-line. Each creature in the area makes a DC 15 Dexterity saving throw, taking 45 (10d8) acid damage on a failed save or half damage on a success.' }
    - { name: 'Slowing Breath', desc: 'The dragon exhales toxic gas in a 30-foot cone. Each creature in the area makes a DC 15 Constitution saving throw, becoming slowed for 1 minute on a failure. A creature repeats the saving throw at the end of each of its turns, ending the effect on itself on a success.' }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Young Copper Dragon - A5E
```
