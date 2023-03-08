---
statblock: true
name: 'Brass Dragon Wyrmling'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Dragon
cr: 2
ac: 16
hp: 38
hit_dice: '7d8 + 7'
speed: '30 ft., burrow 15 ft., fly 60 ft.'
stats:
    - 14
    - 12
    - 12
    - 14
    - 12
    - 12
damage_immunities: fire
skillsaves:
    - { arcana: 4 }
    - { history: 4 }
    - { nature: 4 }
    - { perception: 3 }
    - { religion: 4 }
    - { stealth: 3 }
senses: 'blindsight 10 ft., darkvision 60 ft., passive Perception 13'
languages: Draconic
traits:
    - { name: Self-Sufficient, desc: 'The brass dragon can subsist on only a quart of water and a pound of food per day.' }
actions:
    - { name: Bite, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 13 (2d10 + 2) piercing damage.' }
    - { name: 'Breath Weapons (Recharge 56)', desc: 'The dragon uses one of the following breath weapons:' }
    - { name: 'Molten Breath', desc: 'The dragon exhales molten glass in a 20-foot-long, 5-foot-wide line. Each creature in the area makes a DC 11 saving throw, taking 10 (3d6) fire damage on a failed save or half damage on a success.' }
    - { name: 'Sleep Breath', desc: 'The dragon exhales sleep gas in a 15-foot cone. Each creature in the area makes a DC 11 Constitution saving throw. On a failure, a creature falls unconscious for 10 minutes or until it takes damage or someone uses an action to wake it.' }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Brass Dragon Wyrmling
```
