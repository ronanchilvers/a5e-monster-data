---
statblock: true
name: 'Young Gold Dragon - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Dragon
cr: 10
ac: 18
hp: 157
hit_dice: '15d10 + 75'
speed: '40 ft., fly 80 ft., swim 40 ft.'
stats:
    - 22
    - 14
    - 20
    - 16
    - 12
    - 20
damage_immunities: fire
saves:
    dexterity: 6
    constitution: 9
    wisdom: 5
    charisma: 9
skillsaves:
    insight: 5
    perception: 5
    persuasion: 9
    stealth: 6
senses: 'blindsight 30 ft., darkvision 120 ft., passive Perception 18'
languages: 'Common, Draconic'
traits:
    0: { name: Valor, desc: "Creatures of the dragon's choice within 30 feet gain a +1 bonus to saving throws and are immune to the charmed and frightened conditions." }
    1: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 17). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:bless, healing word']
actions:
    - { name: Multiattack, desc: 'The dragon attacks with its bite and twice with its claws.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +10 to hit, reach 10 ft., one target. Hit: 22 (3d10 + 6) piercing damage plus 4 (1d8) fire damage.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +10 to hit, reach 5 ft., one target. Hit: 15 (2d8 + 6) slashing damage.' }
    - { name: 'Breath Weapons (Recharge 56)', desc: 'The dragon uses one of the following breath weapons:' }
    - { name: 'Molten Breath', desc: 'The dragon exhales molten gold in a 30-foot cone. Each creature in the area makes a DC 17 Dexterity saving throw, taking 49 (9d10) fire damage on a failed save or half damage on a success.' }
    - { name: 'Weakening Breath', desc: 'The dragon exhales gas in a 30-foot cone. Each creature in the area must succeed on a DC 17 Constitution saving throw or suffer disadvantage on weapon attack rolls for 1 minute. A weakened creature repeats the saving throw at the end of each of its turns, ending the effect on a success.' }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Young Gold Dragon - A5E
```
