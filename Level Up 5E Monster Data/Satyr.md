---
statblock: true
name: 'Satyr - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Fey
cr: 1
ac: 13
hp: 22
hit_dice: 5d8
speed: '40 ft.'
stats:
    - 12
    - 14
    - 10
    - 10
    - 10
    - 16
skillsaves:
    - { perception: 2 }
    - { performance: 5 }
    - { stealth: 4 }
senses: 'passive Perception 12'
languages: 'Common, Elvish, Sylvan'
traits:
    - { name: 'Magic Resistance', desc: 'The satyr has advantage on saving throws against spells and other magical effects.' }
actions:
    - { name: Ram, desc: 'Melee Weapon Attack: +3 to hit, reach 5 ft., one target. Hit: 4 (1d6 + 1) bludgeoning damage, or 8 (2d6 + 1) bludgeoning damage if the satyr moves at least 20 feet straight towards the target before the attack.' }
    - { name: Rapier, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 6 (1d8 + 2) piercing damage.' }
    - { name: Shortbow, desc: 'Ranged Weapon Attack: +4 to hit, range 80/320 ft., one target. Hit: 5 (1d6 + 2) piercing damage.' }
    - { name: 'Dance Tune', desc: "Each humanoid, fey, or giant within 30 feet that can hear the satyr makes a DC 13 Wisdom saving throw. On a failure, it must dance until the beginning of the satyr's next turn. While dancing, its movement speed is halved, and it has disadvantage on attack rolls. Satyrs don't suffer the negative consequences of dancing. If a creature's saving throw is successful or the effect ends for it, it is immune to any satyr's Dance Tune for 24 hours. This is a magical charm effect." }
    - { name: Lullaby, desc: "Each humanoid or giant within 30 feet that can hear the satyr makes a DC 13 Constitution saving throw. On a failure, it falls asleep. It wakes up if a creature uses an action to wake it or if the satyr ends a turn without using its action to continue the lullaby. If a creature's saving throw is successful or the effect ends for it, it is immune to any satyr's Lullaby for 24 hours. This is a magical charm effect." }
combat:
    - { name: 'If a satyr is alone, it rams and fights with its rapier', desc: 'In a group of satyrs, one uses Lullaby or Dance Tune while the others fight in melee.' }

---
```statblock
monster: Satyr - A5E
```
