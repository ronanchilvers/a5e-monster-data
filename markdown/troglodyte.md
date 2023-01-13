---
statblock: true
name: 'Troglodyte - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 1
ac: 11
hp: 19
hit_dice: '3d8 + 6'
speed: '30 ft., swim 30 ft.'
stats:
    - 14
    - 12
    - 14
    - 10
    - 12
    - 10
skillsaves:
    - { stealth: 3 }
senses: 'darkvision 120 ft., passive Perception 11'
languages: Troglodyte
traits:
    - { name: Stench, desc: "A non-troglodyte that starts its turn within 5 feet of the troglodyte makes a DC 12 Constitution saving throw. On a failure, the creature is poisoned until the start of its next turn. On a successful save, the creature is immune to a troglodyte's Stench for 24 hours." }
    - { name: 'Sunlight Sensitivity', desc: 'While in sunlight, the troglodyte has disadvantage on attack rolls, as well as on Perception checks that rely on sight.' }
actions:
    - { name: Multiattack, desc: 'The troglodyte attacks with its bite and its claws.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 4 (1d4 + 2) piercing damage, and the target makes a DC 12 Constitution saving throw. On a failure, it is infected with Troglodyte Stench.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 5 (1d6 + 2) slashing damage.' }
    - { name: Dart, desc: 'Melee Weapon Attack: +4 to hit, range 20/60 ft., one target. Hit: 4 (1d4 + 2) piercing damage plus 3 (1d6) poison damage.' }
combat:
    - { name: 'Troglodytes throw darts and then attack with bite and claws', desc: 'They prefer to attack enemies that are not inflicted with Troglodyte Stench. They retreat if reduced to half their number or if exposed to sunlight.' }

---
```statblock
monster: Troglodyte - A5E
```
