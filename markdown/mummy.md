---
statblock: true
name: 'Mummy - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Undead
cr: 3
ac: 11
hp: 67
hit_dice: '9d8 + 27'
speed: '20 ft.'
stats:
    - 16
    - 8
    - 16
    - 10
    - 10
    - 12
damage_resistances: 'damage from nonmagical weapons'
damage_immunities: 'necrotic, poison'
condition_immunities: 'charmed, fatigue, frightened, paralyzed, poisoned'
saves:
    - { wisdom: 2 }
senses: 'darkvision 60 ft., passive Perception 10'
languages: 'the languages it knew in life'
traits:
    - { name: Flammable, desc: "After taking fire damage, the mummy catches fire and takes 5 (1d10) ongoing fire damage if it isn't already suffering ongoing fire damage. A creature can use an action to extinguish this fire." }
    - { name: 'Curse: Mummy Rot', desc: "A mummy's touch inflicts a dreadful curse called mummy rot. A cursed creature can't regain hit points, and its hit point maximum decreases by an amount equal to the creature's total number of Hit Dice for every 24 hours that elapse. If this curse reduces the target's hit point maximum to 0, the target dies and crumbles to dust. Remove curse and similar magic ends the curse." }
actions:
    - { name: Multiattack, desc: 'The mummy uses Dreadful Glare and then attacks with its rotting fist.' }
    - { name: 'Dreadful Glare (Gaze)', desc: "The mummy targets a creature within 60 feet. The target makes a DC 11 Wisdom saving throw. On a failure, it is magically frightened until the end of the mummy's next turn. If the target fails the save by 5 or more, it is paralyzed for the same duration. A target that succeeds on the saving throw is immune to the Dreadful Glare of mummies (but not mummy lords) for 24 hours." }
    - { name: 'Rotting Fist', desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 10 (2d6 + 3) bludgeoning damage plus 10 (3d6) necrotic damage. If the target is a creature, it makes a DC 13 Constitution saving throw. On a failure, it is cursed with Mummy Rot.' }
combat:
    - { name: 'THE MUMMY MOVES TOWARDS THE CLOSEST ENEMY', desc: "IT USES DREADFUL GLARE ON THE CLOSEST CREATURE IT HASN'T YET TARGETED WITH THAT ATTACK AND USES ITS ROTTING FIST ON A CREATURE IT CAN REACH, PREFERRING FRIGHTENED OR PARALYZED TARGETS." }

---
```statblock
monster: Mummy - A5E
```
