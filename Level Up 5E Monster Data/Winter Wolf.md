---
statblock: true
name: 'Winter Wolf'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Monstrosity
cr: 3
ac: 13
hp: 67
hit_dice: 9d10+18
speed: '50 ft.'
stats:
    - 18
    - 12
    - 14
    - 6
    - 12
    - 8
damage_immunities: cold
skillsaves:
    - { perception: 3 }
    - { stealth: 3 }
senses: 'darkvision 30 ft., passive Perception 13'
languages: 'Common, Giant, Winter Wolf'
traits:
    - { name: 'Keen Hearing and Smell', desc: 'The wolf has advantage on Perception checks that rely on hearing and smell.' }
    - { name: 'Pack Tactics', desc: "The wolf has advantage on attack rolls against a creature if at least one of the wolf's allies is within 5 feet of the creature and not incapacitated." }
    - { name: Camouflage, desc: 'The wolf has advantage on Stealth checks made to hide in snow.' }
actions:
    - { name: Bite, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 11 (2d6+4) piercing damage. If the target is a creature, it makes a DC 14 Strength saving throw, falling prone on a failure.' }
    - { name: 'Cold Breath (Recharge 56)', desc: 'The wolf exhales frost in a 15-foot cone. Each creature in the area makes a DC 12 Dexterity saving throw, taking 18 (4d8) cold damage on a failure or half damage on a success.' }

---
```statblock
monster: Winter Wolf
```
