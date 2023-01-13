---
statblock: true
name: 'Hound Guardian - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Construct
cr: 1
ac: 15
hp: 32
hit_dice: '5d8 + 10'
speed: '50 ft.'
stats:
    - 16
    - 10
    - 14
    - 2
    - 12
    - 6
damage_immunities: 'poison; damage from nonmagical, non-adamantine weapons'
condition_immunities: 'charmed, fatigue, frightened, paralyzed, petrified, poisoned'
skillsaves:
    perception: 3
senses: 'darkvision 60 ft., passive Perception 13'
languages: "understands the languages of its creator but can't speak"
traits:
    - { name: 'Immutable Form', desc: 'The guardian is immune to any effect that would alter its form.' }
    - { name: 'Keen Hearing and Smell', desc: 'The guardian has advantage on Perception checks that rely on hearing or smell.' }
    - { name: 'Magic Resistance', desc: 'The guardian has advantage on saving throws against spells and magical effects.' }
    - { name: 'Constructed Nature', desc: "Guardians don't require air, sustenance, or sleep." }
actions:
    - { name: Bite, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 8 (2d4 + 3) piercing damage. If the target is a creature, it makes a DC 13 Strength saving throw, falling prone on a failure.' }
reactions:
    - { name: 'Protective Bite', desc: "When a creature within 5 feet hits the guardian's owner with a melee attack, the guardian bites the attacker." }
combat:
    - { name: "The hound guardian follows its owner's orders", desc: 'If not given orders, it moves to stay within 60 feet of its master and attacks anyone who threatens its master or itself (in that order).' }

---
```statblock
monster: Hound Guardian - A5E
```
