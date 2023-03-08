---
statblock: true
name: Ettercap
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Monstrosity
cr: 2
ac: 13
hp: 44
hit_dice: '8d8 + 8'
speed: '30 ft., climb 30 ft.'
stats:
    - 14
    - 16
    - 13
    - 8
    - 12
    - 8
saves:
    - { dexterity: 5 }
skillsaves:
    - { perception: 3 }
    - { stealth: 5 }
    - { survival: 3 }
senses: 'darkvision 60 ft., passive Perception 13'
languages: Ettercap
traits:
    - { name: 'Speak with Spiders', desc: 'The ettercap can communicate with spiders that can hear it or that are touching the same web.' }
    - { name: 'Spider Climb', desc: 'The ettercap can use its climb speed even on difficult surfaces and upside down on ceilings.' }
    - { name: 'Web Sense', desc: 'While touching a web, the ettercap knows the location of other creatures touching that web.' }
    - { name: 'Web Walker', desc: 'The ettercap ignores movement restrictions imposed by webs.' }
actions:
    - { name: Multiattack, desc: 'The ettercap attacks with its bite and claws.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one creature. Hit: 5 (1d4 + 3) piercing damage plus 3 (1d6) poison damage.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 8 (2d4 + 3) slashing damage.' }
    - { name: Strangle, desc: "Melee Weapon Attack: +5 to hit, reach 5 ft., one Medium or smaller creature against which the ettercap has advantage on the attack roll. Hit: 7 (1d8 + 3) bludgeoning damage, and the target is grappled (escape DC 13). Until this grapple ends, the ettercap automatically hits the target with its strangle attack, and the target can't breathe." }
'bonus actions':
    - { name: 'Web (Recharge 56)', desc: 'Ranged Weapon Attack: +5 to hit, range 20/60 ft., one Large or smaller creature. Hit: The creature is restrained by webs. As an action, a creature can make a DC 11 Strength check, breaking the webs on a success. The effect also ends if the webs are destroyed. They have AC 10, 1 hit point, and immunity to all damage except slashing, fire, and force.' }
combat:
    - { name: 'The ettercap tries to attack with surprise, using its web to restrain an enemy', desc: 'If it succeeds, it strangles that enemy. It repeats this combination whenever its web is available. Otherwise, it uses its bite and claws. If outnumbered and bloodied, it flees.' }

---
```statblock
monster: Ettercap
```
