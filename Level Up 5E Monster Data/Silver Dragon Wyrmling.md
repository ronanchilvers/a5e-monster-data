---
statblock: true
name: 'Silver Dragon Wyrmling'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Dragon
cr: 3
ac: 17
hp: 60
hit_dice: '8d8 + 24'
speed: '30 ft., fly 60 ft.'
stats:
    - 18
    - 14
    - 16
    - 12
    - 10
    - 14
damage_immunities: cold
skillsaves:
    - { perception: 2 }
    - { stealth: 4 }
senses: 'blindsight 10 ft., darkvision 60 ft., passive Perception 12'
languages: Draconic
traits:
    - { name: 'Cloud Strider', desc: 'The dragon suffers no harmful effects from high altitude.' }
actions:
    - { name: Bite, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 20 (3d10 + 4) piercing damage.' }
    - { name: 'Breath Weapons (Recharge 56)', desc: 'The dragon uses one of the following breath weapons:' }
    - { name: 'Frost Breath', desc: 'The dragon exhales freezing wind in a 15-foot cone. Each creature in the area makes a DC 13 Constitution saving throw, taking 17 (5d6) cold damage on a failed save or half damage on a success.' }
    - { name: 'Paralyzing Breath', desc: 'The dragon exhales paralytic gas in a 15-foot cone. Each creature in the area must succeed on a DC 13 Constitution saving throw or be paralyzed until the end of its next turn.' }
combat:
    - { name: 'While individual dragons have their own personalities and tactics, most rely heavily on their breath weapons', desc: 'They use them whenever they can, preferably from maximum distance and while flying above their enemies.' }
    - { name: 'When fighting in the open, dragons often circle above their enemies as they wait for their breath weapons to recharge', desc: "They only close to melee if their enemies deal significant damage with ranged attacks, or if they can savage an enemy cut off from its allies. Once bloodied, dragons become more aggressive, attacking with bite and claws when their breath weapons aren't available." }
    - { name: 'If a dragon is protecting its lair, it utilizes lair features, traps, allies, and architecture such as escape tunnels to keep up a hit-and-run fight, reappearing only when it has a fully-recharged breath weapon', desc: 'If the dragon is forced into melee combat, it uses its bite and claws against a single foe. If it has legendary actions like Roar and Wing Attack, it uses them to disperse its other enemies.' }
    - { name: 'If reduced to less than one-fourth its hit points while fighting in the open, a dragon flies away', desc: 'However, it fights to the death to defend its lair, unless it can regain the upper hand through tricks or bargains.' }

---
```statblock
monster: Silver Dragon Wyrmling
```
