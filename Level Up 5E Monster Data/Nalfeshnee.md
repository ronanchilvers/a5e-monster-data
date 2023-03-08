---
statblock: true
name: Nalfeshnee
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Fiend
cr: 13
ac: 18
hp: 184
hit_dice: '16d10 + 96'
speed: '20 ft., fly 30 ft.'
stats:
    - 20
    - 16
    - 22
    - 20
    - 16
    - 16
damage_resistances: 'cold, fire, lightning; damage from nonmagical weapons'
damage_immunities: poison
condition_immunities: poisoned
saves:
    - { strength: 10 }
    - { constitution: 11 }
    - { intelligence: 10 }
    - { wisdom: 8 }
    - { charisma: 8 }
senses: 'truesight 120 ft., passive Perception 13'
languages: 'Abyssal, telepathy 120 ft.'
traits:
    - { name: 'Chaotic Evil', desc: 'The nalfeshnee radiates a Chaotic and Evil aura.' }
    - { name: 'Magic Resistance', desc: 'The nalfeshnee has advantage on saving throws against spells and magical effects.' }
actions:
    - { name: Multiattack, desc: 'The nalfeshnee makes a bite attack and a claws attack.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +10 to hit, reach 10 ft., one target. Hit: 32 (5d10 + 5) piercing damage. If it uses its bite on a dead, non-demon creature, it regains 27 (5d10) hit points and recharges its Horror Nimbus. It may gain this benefit only once per creature.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +10 to hit, reach 10 ft., one target. Hit: 31 (4d12 + 5) slashing damage.' }
    - { name: 'Chaos Blast', desc: 'Beams of multicolored light arc through a 15-foot-radius sphere centered on a point within 90 feet. Each creature in the area that does not have a Chaotic alignment makes a DC 16 Wisdom saving throw, taking 52 (8d12) force damage on a failure or half damage on a success.' }
'bonus actions':
    - { name: 'Horror Nimbus (1/Day)', desc: 'The nalfeshnee glows with an unholy, multicolored radiance. Each creature within 15 feet of the nalfeshnee that can see it makes a DC 16 Wisdom saving throw. On a failure, a creature is frightened for 1minute. A creature repeats the saving throw at the end of each of its turns, ending the effect on itself on a success.' }
    - { name: Teleport, desc: 'The nalfeshnee magically teleports up to 120 feet to an unoccupied space it can see.' }
combat:
    - { name: 'The nalfeshnee stays out of melee combat, using Chaos Blast and letting minions do the dirty work', desc: 'If threatened with melee attacks, it uses Horror Nimbus and its bite and claws, and bites downed opponents to recharge. If alone against dangerous foes, or if its allies are taking a beating, it flees using Teleport.' }

---
```statblock
monster: Nalfeshnee
```
