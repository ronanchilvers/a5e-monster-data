---
statblock: true
name: 'Lion - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Beast
cr: 1
ac: 12
hp: 30
hit_dice: 4d10+8
speed: '50 ft.'
stats:
    - 16
    - 14
    - 14
    - 3
    - 12
    - 4
skillsaves:
    - { perception: 3 }
    - { stealth: 4 }
senses: 'passive Perception 13'
traits:
    - { name: 'Keen Smell', desc: 'The lion has advantage on Perception checks that rely on smell.' }
    - { name: 'Long Jump', desc: 'The lion can long jump up to 25 feet.' }
    - { name: 'Pack Tactics', desc: "The lion has advantage on attack rolls against a creature if at least one of the lion's allies is within 5 feet of the creature and not incapacitated." }
actions:
    - { name: Claws, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 7 (1d8+3) slashing damage. If the lion moves at least 20 feet straight towards the target before the attack, the target makes a DC 13 Strength saving throw, falling prone on a failure.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 8 (1d10+3) piercing damage.' }
'bonus actions':
    - { name: 'Opportune Bite', desc: 'The lion makes a bite attack against a prone creature.' }

---
```statblock
monster: Lion - A5E
```
