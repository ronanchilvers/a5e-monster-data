---
statblock: true
name: 'Walking Statue'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Construct
cr: 3
ac: 16
hp: 66
hit_dice: '7d10 + 28'
speed: '30 ft.'
stats:
    - 18
    - 8
    - 18
    - 1
    - 10
    - 1
damage_immunities: 'poison, psychic'
condition_immunities: 'blinded, charmed, deafened, exhaustion, frightened, paralyzed, petrified, poisoned'
senses: 'blindsight 60 ft. (blind beyond this radius), passive Perception 10'
traits:
    - { name: 'Bludgeoning Weakness', desc: 'When the statue takes more than 10 bludgeoning damage from one attack, it falls prone.' }
    - { name: 'False Appearance', desc: 'While motionless, the statue is indistinguishable from a normal statue.' }
    - { name: Spell-created, desc: 'The DC for dispel magic to destroy this creature is 19.' }
actions:
    - { name: Smash, desc: 'Melee Weapon Attack: +6 to hit, reach 5 ft., one target. Hit: 15 (2d10 + 4) bludgeoning damage.' }
combat:
    - { name: 'Animated objects usually wait immobile until touched or approached, and then attack the closest creature', desc: 'Some follow more complicated routines. Animated objects follow the commands last given them by their creators and show no initiative.' }
    - { name: 'When it moves, a walking statue lumbers clumsily but deceptively quickly, its heavy footfalls accompanied by the sound of grinding stone', desc: 'Its fists are fearsome weapons, although some statues are also armed with stone or bronze weaponry.' }

---
```statblock
monster: Walking Statue
```
