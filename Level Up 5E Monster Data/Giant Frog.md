---
statblock: true
name: 'Giant Frog'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Beast
cr: 1
ac: 11
hp: 18
hit_dice: 4d8
speed: '30 ft., swim 30 ft.'
stats:
    - 12
    - 12
    - 10
    - 2
    - 10
    - 4
skillsaves:
    - { perception: 2 }
    - { stealth: 3 }
senses: 'darkvision 30 ft., passive Perception 12'
traits:
    - { name: Amphibious, desc: 'The frog can breathe air and water.' }
actions:
    - { name: Bite, desc: "Melee Weapon Attack: +3 to hit, reach 5 ft., one target. Hit: 4 (1d6+1) piercing damage and the target is grappled (escape DC 11). Until this grapple ends, the frog can't bite another target." }
    - { name: Swallow, desc: "The frog makes a bite attack against a Small or smaller creature it is grappling. If the attack hits and the frog has not swallowed another creature, the target is swallowed and the grapple ends. A swallowed creature has total cover from attacks from outside the frog, it is blinded and restrained, and it takes 5 (2d4) acid damage at the beginning of each of the frog's turns. If the frog dies, the target is no longer swallowed." }
    - { name: 'Vaulting Leap', desc: "The frog jumps up to 10 feet horizontally and 5 feet vertically. If it's within 5 feet of a creature that it is not grappling at the end of this movement, it may make a bite attack against that creature with advantage." }

---
```statblock
monster: Giant Frog
```
