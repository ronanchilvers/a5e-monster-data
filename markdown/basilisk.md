---
statblock: true
name: 'Basilisk - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Monstrosity
cr: 3
ac: 15
hp: 52
hit_dice: '7d8 + 21'
speed: '20 ft., climb 10 ft.'
stats:
    - 14
    - 8
    - 16
    - 2
    - 10
    - 8
senses: 'darkvision 30 ft., passive Perception 10'
actions:
    - { name: 'Stone Gaze (Gaze)', desc: "The basilisk targets a creature within 60 feet. The target makes a DC 13 Constitution saving throw. On a failure, the target magically begins to turn to stone and is restrained. A lesser restoration spell ends this effect. At the beginning of the basilisk's next turn, if still restrained, the target repeats the saving throw. On a success, the effect ends. On a failure, the target is petrified. This petrification can be removed with greater restoration or similar magic or with basilisk venom." }
    - { name: 'Venomous Bite', desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 6 (1d8 + 2) piercing damage plus 10 (3d6) poison damage.' }
reactions:
    - { name: 'Stone Glance', desc: 'If a creature within 60 feet that the basilisk can see hits the basilisk with an attack, the basilisk uses Stone Gaze on the attacker.' }
combat:
    - { name: 'The basilisk uses Stone Gaze and Stone Glance on anyone nearby that is not averting their eyes, and bites only if it has no such target', desc: '' }

---
```statblock
monster: Basilisk - A5E
```
