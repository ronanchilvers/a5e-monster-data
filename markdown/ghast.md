---
statblock: true
name: 'Ghast - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Undead
cr: 2
ac: 13
hp: 36
hit_dice: 8d8
speed: '30 ft.'
stats:
    - 16
    - 16
    - 10
    - 10
    - 10
    - 8
damage_resistances: necrotic
damage_immunities: poison
condition_immunities: 'charmed, fatigue, paralyzed, poisoned'
senses: 'darkvision 60 ft., passive Perception 10'
languages: Common
traits:
    - { name: Stench, desc: "A creature that starts its turn within 5 feet of the ghast makes a DC 10 Constitution saving throw. On a failure, it is poisoned until the start of its next turn. On a success, it is immune to any ghast's Stench for 24 hours." }
    - { name: 'Turning Defiance', desc: 'The ghast and any ghouls within 30 feet make saving throws against being turned with advantage.' }
    - { name: 'Undead Nature', desc: "Ghouls and ghasts don't require air, sustenance, or sleep." }
actions:
    - { name: 'Paralyzing Claw', desc: "Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 7 (1d8 + 3) slashing damage. If the target is a living creature, it makes a DC 10 Constitution saving throw. On a failure, the target is paralyzed for 1 minute. The target repeats the saving throw at the end of its turns, ending the effect on itself on a success. If the target's saving throw is successful or the effect ends for it, it is immune to any Paralyzing Claw for 24 hours." }
    - { name: Bite, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one incapacitated creature. Hit: 8 (1d10 + 3) piercing damage.' }
combat:
    - { name: "Ghasts are bolder than ghouls and don't fear radiant damage or elves", desc: 'A ghast retreats only if it sees another ghast defeated.' }

---
```statblock
monster: Ghast - A5E
```
