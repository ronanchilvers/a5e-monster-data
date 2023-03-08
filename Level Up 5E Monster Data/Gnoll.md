---
statblock: true
name: Gnoll
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 1
ac: 14
hp: 22
hit_dice: 5d8
speed: '30 ft.'
stats:
    - 14
    - 12
    - 10
    - 10
    - 8
    - 10
senses: 'darkvision 60 ft., passive Perception 9'
languages: Gnoll
traits:
    - { name: 'Pack Tactics', desc: "The gnoll has advantage on attack rolls against a creature if at least one of the gnoll's allies is within 5 feet of the creature and not incapacitated." }
actions:
    - { name: Spear, desc: 'Melee or Ranged Weapon Attack: +4 to hit, reach 5 ft. or range 20/60 ft., one target. Hit: 5 (1d6 + 2) piercing damage.' }
'bonus actions':
    - { name: 'Rampaging Bite', desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one bloodied creature. Hit: 4 (1d4 + 2) piercing damage.' }
combat:
    - { name: 'Gnolls attack fearlessly, preferring to target bloodied creatures', desc: 'If no such target is present, they attack whichever enemy is nearest.' }

---
```statblock
monster: Gnoll
```
