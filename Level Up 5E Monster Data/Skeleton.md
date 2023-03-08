---
statblock: true
name: Skeleton
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Undead
cr: 1
ac: 13
hp: 13
hit_dice: '2d8 + 4'
speed: '30 ft.'
stats:
    - 10
    - 14
    - 14
    - 6
    - 8
    - 5
damage_immunities: poison
condition_immunities: 'fatigue, poisoned'
'damage vulenrabilities': bludgeoning
senses: 'darkvision 60 ft., passive Perception 9'
languages: "understands the languages it knew in life but can't speak"
traits:
    - { name: 'Undead Nature', desc: "A skeleton doesn't require air, sustenance, or sleep." }
actions:
    - { name: Shortsword, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 5 (1d6 + 2) piercing damage.' }
    - { name: Shortbow, desc: 'Ranged Weapon Attack: +4 to hit, range 80/320 ft., one target. Hit: 5 (1d6 + 2) piercing damage.' }
combat:
    - { name: 'Skeletons follow the last order given them by their creator: defend the gates, attack trespassers, etc', desc: "Without orders, they attack any creatures that approach them. Skeletons don't retreat unless commanded to do so." }

---
```statblock
monster: Skeleton
```
