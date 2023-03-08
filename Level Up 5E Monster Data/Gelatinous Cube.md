---
statblock: true
name: 'Gelatinous Cube'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Ooze
cr: 2
ac: 6
hp: 76
hit_dice: '8d10 + 32'
speed: '15 ft., swim 15 ft.'
stats:
    - 16
    - 2
    - 18
    - 1
    - 6
    - 1
condition_immunities: 'blinded, charmed, deafened, fatigue, frightened, prone'
senses: 'blindsight 60 ft. (blind beyond this radius), passive Perception 8'
traits:
    - { name: 'Engulfing Body', desc: "A creature that enters the cube's space is subjected to the saving throw and consequences of its Engulf attack." }
    - { name: 'Sunlight Sensitivity', desc: 'While in sunlight, the cube has disadvantage on attack rolls.' }
    - { name: Transparent, desc: 'While the cube is motionless, creatures unaware of its presence must succeed on a DC 15 Perception check to spot it.' }
    - { name: 'Ooze Nature', desc: "An ooze doesn't require air or sleep." }
actions:
    - { name: Pseudopod, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 10 (3d6) acid damage.' }
    - { name: Engulf, desc: "The cube moves up to its Speed. While doing so, it can enter Large or smaller creatures' spaces. Whenever the cube enters a creature's space, the creature makes a DC 13 Dexterity saving throw. If the creature is unaware of the cube's presence, it makes its saving throw against Engulf with disadvantage. On a success, the creature may use its reaction, if available, to move up to half its Speed without provoking opportunity attacks. If the creature doesn't move, it is engulfed by the cube." }
    - { name: "A creature engulfed by the cube takes 10 (3d6) acid damage, can't breathe, is restrained, and takes 10 (3d6) acid damage at the start of each of the cube's turns", desc: 'It can be seen but has total cover. It moves with the cube. The cube can hold as many creatures as fit in its space without squeezing.' }
    - { name: 'An engulfed creature can escape by using an action to make a DC 13 Strength check', desc: 'On a success, the creature moves to a space within 5 feet of the cube. A creature within 5 feet can take the same action to free an engulfed creature, but takes 10 (3d6) acid damage in the process.' }
combat:
    - { name: 'The cube moves constantly, stopping only when its blindsight detects moving creatures', desc: "It then waits motionless for creatures to blunder into it. It pursues creatures that move away from it, either Dashing or using the extra movement from its Engulf action. It retreats only if it's full (containing four Medium creatures or one Large creature) or if it's exposed to sunlight." }

---
```statblock
monster: Gelatinous Cube
```
