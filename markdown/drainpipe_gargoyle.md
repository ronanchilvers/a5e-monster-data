---
statblock: true
name: 'Drainpipe Gargoyle - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Elemental
cr: 2
ac: 15
hp: 45
hit_dice: '6d8 + 18'
speed: '30 ft., fly 60 ft.'
stats:
    - 14
    - 10
    - 16
    - 8
    - 14
    - 8
damage_resistances: 'piercing and slashing damage from nonmagical, non-adamantine weapons'
damage_immunities: poison
condition_immunities: 'fatigue, petrified, poisoned, unconscious'
saves:
    - { strength: 4 }
    - { constitution: 5 }
skillsaves:
    - { perception: 4 }
senses: 'darkvision 60 ft., passive Perception 14'
languages: Terran
traits:
    - { name: 'False Appearance', desc: 'While motionless, the gargoyle is indistinguishable from a normal statue.' }
    - { name: 'Elemental Nature', desc: "Gargoyles don't require air, sustenance, or sleep." }
actions:
    - { name: Multiattack, desc: 'The gargoyle attacks with its bite and its claws.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 5 (1d6 + 2) piercing damage.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 5 (1d6 + 2) slashing damage, or 9 (2d6 + 2) slashing damage if the gargoyle started its turn at least 20 feet above the target.' }
    - { name: Rock, desc: 'Ranged Weapon Attack: +4 to hit, range 20/60 ft., one target. Hit: 9 (2d6 + 2) bludgeoning damage.' }
    - { name: 'Spit (Recharge 56)', desc: 'The gargoyle spits a steam of water 5 feet wide and 30 feet long. Each creature in the area makes a DC 12 Strength saving throw, taking 10 (3d6) bludgeoning damage and being pushed up to 15 feet from the gargoyle on a failure. On a success, a creature takes half damage.' }
combat:
    - { name: 'Gargoyles prefer to attack their opponents from above', desc: 'If space allows, they dive towards a foe, dealing extra claw damage, and then fly back up on the same turn. They accept opportunity attacks in order to gain height on their opponent, especially when fighting a creature with a nonmagical bladed weapon.' }

---
```statblock
monster: Drainpipe Gargoyle - A5E
```
