---
statblock: true
name: 'Crusher - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Construct
cr: 10
ac: 20
hp: 115
hit_dice: '11d10 + 55'
speed: '20 ft.'
stats:
    - 20
    - 8
    - 20
    - 1
    - 6
    - 1
damage_immunities: 'poison, psychic'
condition_immunities: 'blinded, charmed, deafened, exhaustion, frightened, paralyzed, petrified, poisoned'
skillsaves:
    perception: 2
senses: 'blindsight 60 ft. (blind beyond that range), passive Perception 12'
traits:
    - { name: 'Clockwork Nature', desc: "A clockwork doesn't require air, nourishment, or rest, and is immune to disease." }
    - { name: 'Immutable Form', desc: 'The clockwork is immune to any effect that would alter its form.' }
actions:
    - { name: Crush, desc: "The crusher moves up to its Speed in a straight line. While doing so, it can attempt to enter Large or smaller creatures' spaces. Whenever the crusher attempts to enter a creature's space, the creature makes a DC 17 Dexterity or Strength saving throw (the creature's choice). If the creature succeeds at a Strength saving throw, the crusher's movement ends for the turn. If the creature succeeds at a Dexterity saving throw, the creature may use its reaction, if available, to move up to half its Speed without provoking opportunity attacks. The first time on the crusher's turn that it enters a creature's space, the creature is knocked prone and takes 50 (10d8 + 5) bludgeoning damage. A creature is prone while in the crusher's space." }
    - { name: Ram, desc: 'Melee Weapon Attack: +9 to hit, reach 5 ft., one target. Hit: 23 (4d8 + 5) bludgeoning damage. If the crusher moves at least 20 feet straight towards the target before the attack, the attack deals an extra 18 (4d8) bludgeoning damage.' }
'bonus actions':
    - { name: 'Overclock (Recharge 56)', desc: 'The crusher takes the Dash action.' }
combat:
    - { name: 'The crusher moves straight towards the closest creature not authorized to be in its area, crushes it, and then moves towards the next creature, using Overclock if available', desc: 'It repeats the process until no living unauthorized creatures remain. The crusher uses its ram attack to knock down obstacles.' }

---
```statblock
monster: Crusher - A5E
```
