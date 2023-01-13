---
statblock: true
name: 'Siren - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Monstrosity
cr: 1
ac: 11
hp: 38
hit_dice: '7d8 + 7'
speed: '20 ft., swim 40 ft.'
stats:
    - 12
    - 12
    - 12
    - 10
    - 10
    - 14
saves:
    - { wisdom: 2 }
senses: 'passive Perception 10'
languages: Common
traits:
    - { name: Amphibious, desc: 'The sirencan breathe and sing both in air and underwater.' }
actions:
    - { name: Multiattack, desc: 'The harpy attacks twice with its claw.' }
    - { name: Claw, desc: 'Melee Weapon Attack: +3 to hit, reach 5 ft., one target. Hit: 4 (1d6 + 1) slashing damage.' }
'bonus actions':
    - { name: 'Luring Song', desc: "The harpy sings a magical song. Each humanoid and giant within 300 feet that can hear it makes a DC 12 Wisdom saving throw. On a failure, a creature becomes charmed until the harpy fails to use its bonus action to continue the song. While charmed by the harpy, a creature is incapacitated and ignores other harpy songs. On each of its turns, the creature moves towards the harpy by the most direct route, not avoiding opportunity attacks or hazards. The creature repeats its saving throw whenever it is damaged and before it enters damaging terrain such as lava. If a saving throw is successful or the effect ends on it, it is immune to any harpy's song for the next 24 hours." }
combat:
    - { name: 'The harpy uses its Luring Song continuously whenever enemies are within 300 feet', desc: 'It prefers to attack creatures charmed by it and tries to evade creatures that attack it in melee. It flees if it is bloodied while no creatures are charmed by it.' }

---
```statblock
monster: Siren - A5E
```
