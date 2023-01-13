---
statblock: true
name: 'Merclops - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Giant
cr: 7
ac: 13
hp: 126
hit_dice: '11d12 + 55'
speed: 'swim 60 ft.'
stats:
    - 20
    - 10
    - 20
    - 8
    - 10
    - 10
skillsaves:
    - { animal: 0 }
    - { survival: 3 }
senses: 'passive Perception 10'
languages: Giant
traits:
    - { name: 'Panicked Rage', desc: 'While a merclops is frightened and the source of its fear is in sight, it makes attack rolls with advantage instead of disadvantage.' }
    - { name: 'Poor Depth Perception', desc: 'The merclops makes all ranged attacks with disadvantage.' }
    - { name: Aquatic, desc: 'The merclops can breathe underwater.' }
actions:
    - { name: Multiattack, desc: 'The merclops makes two melee attacks.' }
    - { name: Club, desc: 'Melee Weapon Attack: +8 to hit, reach 10 ft., one target. Hit: 18 (3d8 + 5) bludgeoning damage.' }
    - { name: Harpoon, desc: 'Melee or Ranged Weapon Attack: +8 to hit, reach 10 ft. or range 90 ft. (see Poor Depth Perception), one target. Hit: 27 (4d10 + 5) piercing damage. The target makes a DC 16 Strength saving throw. On a failure, the merclops pulls the target up to 30 feet toward the merclops.' }
reactions:
    - { name: 'Big Windup', desc: 'When a creature hits the merclops with a melee attack, the merclops readies a powerful strike against its attacker. The merclops has advantage on the next club attack it makes against the attacker before the end of its next turn.' }
'bonus actions':
    - { name: 'Thick Skulled (1/Day)', desc: 'The merclops can end one condition on itself that was imposed through a failed Wisdom saving throw.' }
combat:
    - { name: "The merclops uses its harpoon when it can't reach its foe but it prefers melee", desc: 'It uses its club attack on whichever creature it has targeted with Big Windup. It may retreat or surrender if reduced to 30 hit points or fewer, unless it is too enraged to notice its wounds.' }

---
```statblock
monster: Merclops - A5E
```
