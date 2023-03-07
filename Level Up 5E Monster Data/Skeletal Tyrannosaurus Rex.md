---
statblock: true
name: 'Skeletal Tyrannosaurus Rex - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Undead
cr: 8
ac: 13
hp: 126
hit_dice: '11d12 + 55'
speed: '50 ft.'
stats:
    - 22
    - 10
    - 20
    - 2
    - 8
    - 5
damage_immunities: poison
condition_immunities: 'fatigue, poisoned'
'damage vulenrabilities': bludgeoning
senses: 'darkvision 60 ft., passive Perception 9'
traits:
    - { name: 'Undead Nature', desc: "A skeleton doesn't require air, sustenance, or sleep." }
actions:
    - { name: Multiattack, desc: 'The skeleton makes a bite attack and a tail attack against two different targets.' }
    - { name: Bite, desc: "Melee Weapon Attack: +9 to hit, reach 10 ft., one target. Hit: 25 (3d12 + 6) piercing damage. If the target is a creature, it is grappled (escape DC 17). Until this grapple ends, the skeleton can't bite a different creature and it has advantage on bite attacks against the grappled creature." }
    - { name: Tail, desc: 'Melee Weapon Attack: +9 to hit, reach 10 ft., one target. Hit: 19 (3d8 + 6) bludgeoning damage.' }
combat:
    - { name: 'Skeletons follow the last order given them by their creator: defend the gates, attack trespassers, etc', desc: "Without orders, they attack any creatures that approach them. Skeletons don't retreat unless commanded to do so." }

---
```statblock
monster: Skeletal Tyrannosaurus Rex - A5E
```
