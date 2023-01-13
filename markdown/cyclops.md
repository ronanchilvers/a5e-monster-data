---
statblock: true
name: 'Cyclops - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Giant
cr: 7
ac: 13
hp: 126
hit_dice: '11d12 + 55'
speed: '40 ft.'
stats:
    - 20
    - 10
    - 20
    - 8
    - 10
    - 10
skillsaves:
    animal: 0
    survival: 3
senses: 'passive Perception 10'
languages: Giant
traits:
    - { name: 'Panicked Rage', desc: 'While a cyclops is frightened and the source of its fear is in sight, it makes attack rolls with advantage instead of disadvantage.' }
    - { name: 'Poor Depth Perception', desc: 'The cyclops makes all ranged attacks with disadvantage.' }
actions:
    - { name: Multiattack, desc: 'The cyclops makes two melee attacks.' }
    - { name: Club, desc: 'Melee Weapon Attack: +8 to hit, reach 10 ft., one target. Hit: 18 (3d8 + 5) bludgeoning damage.' }
    - { name: Rock, desc: 'Ranged Weapon Attack: +8 to hit, range 120 ft. (see Poor Depth Perception), one target. Hit: 32 (5d10 + 5) bludgeoning damage.' }
reactions:
    - { name: 'Big Windup', desc: 'When a creature hits the cyclops with a melee attack, the cyclops readies a powerful strike against its attacker. The cyclops has advantage on the next club attack it makes against the attacker before the end of its next turn.' }
'bonus actions':
    - { name: 'Thick Skulled (1/Day)', desc: 'The cyclops can end one condition on itself that was imposed through a failed Wisdom saving throw.' }
combat:
    - { name: "The cyclops throws rocks when it can't reach its foe but it prefers melee", desc: 'It uses its club attack on whichever creature it has targeted with Big Windup. It may retreat or surrender if reduced to 30 hit points or fewer, unless it is too enraged to notice its wounds.' }

---
```statblock
monster: Cyclops - A5E
```
