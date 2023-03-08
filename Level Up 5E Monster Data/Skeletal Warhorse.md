---
statblock: true
name: 'Skeletal Warhorse'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Undead
cr: 1
ac: 11
hp: 30
hit_dice: '4d10 + 8'
speed: '50 ft.'
stats:
    - 18
    - 12
    - 14
    - 3
    - 8
    - 5
damage_immunities: poison
condition_immunities: 'fatigue, poisoned'
'damage vulenrabilities': bludgeoning
senses: 'darkvision 60 ft., passive Perception 9'
traits:
    - { name: 'Undead Nature', desc: "A skeleton doesn't require air, sustenance, or sleep." }
actions:
    - { name: Hooves, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 7 (1d6 + 4) bludgeoning damage. If the skeleton moves at least 20 feet straight towards the target before the attack, the target makes a DC 14 Strength saving throw, falling prone on a failure.' }
combat:
    - { name: 'Skeletons follow the last order given them by their creator: defend the gates, attack trespassers, etc', desc: "Without orders, they attack any creatures that approach them. Skeletons don't retreat unless commanded to do so." }

---
```statblock
monster: Skeletal Warhorse
```
