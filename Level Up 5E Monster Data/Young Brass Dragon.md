---
statblock: true
name: 'Young Brass Dragon'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Dragon
cr: 9
ac: 17
hp: 153
hit_dice: '18d10 + 54'
speed: '40 ft., burrow 20 ft., fly 80 ft.'
stats:
    - 18
    - 10
    - 16
    - 16
    - 12
    - 14
damage_immunities: fire
saves:
    - { dexterity: 4 }
    - { constitution: 7 }
    - { wisdom: 5 }
    - { charisma: 6 }
skillsaves:
    - { arcana: 7 }
    - { history: 7 }
    - { nature: 7 }
    - { perception: 5 }
    - { persuasion: 6 }
    - { religion: 7 }
    - { stealth: 4 }
senses: 'blindsight 30 ft., darkvision 120 ft., passive Perception 18'
languages: 'Common, Draconic, one more'
traits:
    0: { name: Self-Sufficient, desc: 'The brass dragon can subsist on only a quart of water and a pound of food per day.' }
    1: { name: 'Innate Spellcasting', desc: "The dragon's spellcasting ability is Charisma (save DC 14). It can innately cast the following spells, requiring no material components." }
    traits: [' 3/day each:comprehend languages,']
actions:
    - { name: Multiattack, desc: 'The dragon attacks with its bite and twice with its claws.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +8 to hit, reach 10 ft., one target. Hit: 20 (3d10 + 4) piercing damage plus 4 (1d8) fire damage.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +8 to hit, reach 5 ft., one target. Hit: 13 (2d8 + 4) slashing damage.' }
    - { name: 'Breath Weapons (Recharge 56)', desc: 'The dragon uses one of the following breath weapons:' }
    - { name: 'Molten Breath', desc: 'The dragon exhales molten glass in a 40-foot-long, 5-foot-wide line. Each creature in the area makes a DC 15 Dexterity saving throw, taking 38 (11d6) fire damage on a failed save or half damage on a success.' }
    - { name: 'Sleep Breath', desc: 'The dragon exhales sleep gas in a 30-foot cone. Each creature in the area makes a DC 15 Constitution saving throw. On a failure, a creature falls unconscious for 10 minutes or until it takes damage or someone uses an action to wake it.' }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Young Brass Dragon
```
