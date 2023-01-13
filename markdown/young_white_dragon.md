---
statblock: true
name: 'Young White Dragon - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Dragon
cr: 9
ac: 17
hp: 152
hit_dice: '16d10 + 64'
speed: '40 ft., burrow 20 ft., fly 80 ft., swim 40 ft.'
stats:
    - 18
    - 10
    - 18
    - 8
    - 12
    - 12
damage_immunities: cold
saves:
    dexterity: 4
    constitution: 8
    wisdom: 5
    charisma: 5
skillsaves:
    history: 3
    perception: 5
    stealth: 4
senses: 'blindsight 30 ft., darkvision 120 ft., passive Perception 18'
languages: 'Common, Draconic'
traits:
    0: { name: 'Cold Mastery', desc: 'The dragon is not hindered by cold, icy surfaces, snow, wind, or storms. Additionally, the dragon can choose to burrow through snow and ice without leaving a trace.' }
    1: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 13). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:animal friendship, sleet storm']
actions:
    - { name: Multiattack, desc: 'The dragon attacks once with its bite and twice with its claws.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +8 to hit, reach 10 ft., one target. Hit: 20 (3d10 + 4) piercing damage plus 4 (1d8) cold damage.' }
    - { name: Claw, desc: 'Melee Weapon Attack: +8 to hit, reach 5 ft., one target. Hit: 13 (2d8 + 4) slashing damage.' }
    - { name: 'Cold Breath (Recharge 56)', desc: 'The dragon exhales a 30-foot cone of frost. Each creature in that area makes a DC 15 Constitution saving throw, taking 35 (10d6) cold damage on a failed save or half damage on a success.' }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Young White Dragon - A5E
```
