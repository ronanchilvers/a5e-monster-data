---
statblock: true
name: 'Gray Ooze'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Ooze
cr: 1
ac: 8
hp: 22
hit_dice: '3d8 + 9'
speed: '15 ft., climb 15 ft., swim 15 ft.'
stats:
    - 12
    - 6
    - 16
    - 1
    - 6
    - 1
damage_resistances: 'acid, cold, fire'
condition_immunities: 'blinded, charmed, deafened, fatigue, frightened, prone'
senses: 'blindsight 60 ft. (blind beyond this radius), passive Perception 8'
traits:
    - { name: Amorphous, desc: 'The ooze can pass through an opening as narrow as 1 inch wide without squeezing.' }
    - { name: 'Corrosive Body', desc: 'A creature or a metal object that touches the ooze takes 5 (2d4) acid damage. A nonmagical weapon made of metal that hits the black pudding corrodes after dealing damage, taking a permanent -1 penalty to damage rolls per hit. If this penalty reaches -5, the weapon is destroyed. Metal nonmagical ammunition is destroyed after dealing damage.' }
    - { name: 'False Appearance', desc: 'While motionless, the ooze is indistinguishable from wet stone.' }
    - { name: 'Sunlight Sensitivity', desc: 'While in sunlight, the ooze has disadvantage on attack rolls.' }
    - { name: 'Ooze Nature', desc: "An ooze doesn't require air or sleep." }
actions:
    - { name: Pseudopod, desc: "Melee Weapon Attack: +3 to hit, reach 5 ft., one target. Hit: 3 (1d4 + 1) bludgeoning damage plus 5 (2d4) acid damage. Nonmagical metal armor worn by the target corrodes, taking a permanent -1 penalty to its AC protection per hit. If the penalty reduces the armor's AC protection to 10, the armor is destroyed." }
combat:
    - { name: 'The ooze slides along damp stone walls or floors', desc: 'It pauses when it senses prey approaching. It chases the closest creature it can reach, but flees from sunlight.' }

---
```statblock
monster: Gray Ooze
```
