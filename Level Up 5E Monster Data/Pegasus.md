---
statblock: true
name: Pegasus
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Celestial
cr: 2
ac: 13
hp: 57
hit_dice: '6d10 + 24'
speed: '60 ft., fly 80 ft.'
stats:
    - 18
    - 16
    - 18
    - 10
    - 14
    - 12
saves:
    - { dexterity: 5 }
    - { wisdom: 4 }
    - { charisma: 3 }
skillsaves:
    - { perception: 4 }
senses: 'passive Perception 17'
languages: "understands Celestial, Common, Elvish, and Sylvan, but can't speak"
traits:
    - { name: Good, desc: 'The pegasus radiates a Good aura.' }
    - { name: 'Divine Mount', desc: 'Over the course of a short rest, a willing pegasus can form a bond with a rider. Once this bond is formed, the rider suffers no penalties for riding the pegasus without a saddle. Additionally, if an effect forces both the pegasus and its rider to roll a saving throw, the pegasus automatically succeeds if the rider succeeds. If the pegasus bonds with a new rider, the previous bond ends.' }
actions:
    - { name: Hooves, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 11 (2d6 + 4) bludgeoning damage. If the target is a Large or smaller creature and the pegasus moves at least 20 feet toward it before the attack, the target makes a DC 14 Strength saving throw, falling prone on a failure.' }
combat:
    - { name: 'The pegasus charges an enemy', desc: 'If it knocks its foe down, it flies away and charges again on its next turn. Otherwise, it continues to attack with its hooves.' }

---
```statblock
monster: Pegasus
```
