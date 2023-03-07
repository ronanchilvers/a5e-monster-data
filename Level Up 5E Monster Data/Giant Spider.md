---
statblock: true
name: 'Giant Spider - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Beast
cr: 1
ac: 14
hp: 26
hit_dice: 4d10+4
speed: '30 ft., climb 30 ft.'
stats:
    - 14
    - 16
    - 12
    - 2
    - 10
    - 4
skillsaves:
    - { stealth: 5 }
senses: 'blindsight 10 ft., darkvision 60 ft., passive Perception 10'
traits:
    - { name: 'Spider Climb', desc: 'The spider can climb even on difficult surfaces and upside down on ceilings.' }
    - { name: 'Web Sense', desc: 'While touching a web, the spider knows the location of other creatures touching that web.' }
    - { name: 'Web Walker', desc: 'The spider ignores movement restrictions imposed by webs.' }
actions:
    - { name: Bite, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 5 (1d4+3) piercing damage and the target makes a DC 11 Constitution saving throw, taking 9 (2d8) poison damage on a failure. If the poison damage reduces the target to 0 hit points, the target is made stable but poisoned for 1 hour, even if it regains hit points, and it is paralyzed while poisoned in this way.' }
'bonus actions':
    - { name: 'Web (Recharge 56)', desc: 'Ranged Weapon Attack: +5 to hit, range 20/60 feet., one Large or smaller creature. Hit: The creature is restrained by a web. As an action, a creature can make a DC 12 Strength check, breaking the web on a success. The effect also ends if the web is destroyed. The web is an object with AC 10, 1 hit point, and immunity to all forms of damage except slashing, fire, and force.' }

---
```statblock
monster: Giant Spider - A5E
```
