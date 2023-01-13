---
statblock: true
name: 'Stirge - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Tiny
type: Beast
cr: 1
ac: 13
hp: 2
hit_dice: 1d4
speed: '10 ft., fly 40 ft.'
stats:
    - 4
    - 16
    - 10
    - 2
    - 8
    - 4
senses: 'darkvision 60 ft., passive Perception 9'
actions:
    - { name: Proboscis, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one creature. Hit: 1 piercing damage, and the stirge attaches to the target. A creature can use an action to detach it, and it can detach itself as a bonus action.' }
    - { name: 'Blood Drain', desc: "The stirge drains blood from the creature it is attached to. The creature loses 4 (1d8) hit points. After the stirge has drained 8 hit points, it detaches itself and can't use Blood Drain again until it finishes a rest." }
combat:
    - { name: "A flock of stirges doesn't focus on a single target, but spreads out to attack all nearby creatures", desc: 'A stirge retreats only when sated with blood.' }

---
```statblock
monster: Stirge - A5E
```
