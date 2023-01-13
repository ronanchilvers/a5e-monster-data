---
statblock: true
name: 'Hobgoblin Captain - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 3
ac: 18
hp: 52
hit_dice: '8d8 + 16'
speed: '30 ft.'
stats:
    - 16
    - 14
    - 14
    - 14
    - 12
    - 14
saves:
    - { strength: 5 }
    - { wisdom: 3 }
skillsaves:
    - { athletics: 5 }
    - { engineering: 4 }
    - { intimidation: 4 }
    - { perception: 3 }
senses: 'darkvision 60 ft., passive Perception 13'
languages: 'Common, Goblin'
traits:
    - { name: 'Formation Movement', desc: "If the hobgoblin begins its turn within 5 feet of an ally that is not incapacitated, its movement doesn't provoke opportunity attacks." }
actions:
    - { name: Multiattack, desc: 'The hobgoblin attacks twice with its greatsword.' }
    - { name: Greatsword, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 10 (2d6 + 3) slashing damage.' }
    - { name: Javelin, desc: 'Melee or Ranged Weapon Attack: +5 to hit, reach 5 ft. or range 30/120 ft., one target. Hit: 6 (1d6 + 3) piercing damage.' }
    - { name: "Officer's Command (1/Day)", desc: "The hobgoblin inspires creatures of its choice within 30 feet that can hear and understand it and that have a Challenge Rating of 2 or lower. For the next minute, inspired creatures gain an expertise die on attack rolls and saving throws. A creature can benefit from only one Officer's Command at a time." }
combat:
    - { name: "The hobgoblin captain uses its Officer's Command as soon as melee combat begins", desc: 'It enters melee combat as soon as it can, staying close to allies. It looks for advantages that can be found from cover, darkness, flanking, or terrain. It organizes a safe retreat if it thinks it can fight more effectively later.' }

---
```statblock
monster: Hobgoblin Captain - A5E
```
