---
statblock: true
name: Cockatrice
source: 'Level Up: Monstrous Menagerie'
size: Small
type: Monstrosity
cr: 1
ac: 12
hp: 27
hit_dice: '6d6 + 6'
speed: '20 ft., fly 40 ft.'
stats:
    - 6
    - 14
    - 12
    - 2
    - 12
    - 5
senses: 'darkvision 60 ft., passive Perception 11'
actions:
    - { name: Bite, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 4 (1d4 + 2) piercing damage, and the target makes a DC 11 Constitution saving throw against being petrified. On a failure, the target is restrained as it begins to turn to stone. A lesser restoration spell ends this effect. If still restrained, the creature must repeat the saving throw at the end of its next turn. On a success, the effect ends. On a failure, the creature is petrified for 24 hours.' }
reactions:
    - { name: 'Frenzy (1/Day)', desc: 'When attacked by a creature it can see within 20 feet, the cockatrice moves up to half its Speed and makes a bite attack against that creature.' }
combat:
    - { name: 'When angered, the cockatrice flaps at the nearest enemy and attacks', desc: 'It attacks whoever damaged it most recently. It fights to the death.' }

---
```statblock
monster: Cockatrice
```
