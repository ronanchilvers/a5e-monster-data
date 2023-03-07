---
statblock: true
name: 'Stone Guardian - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Construct
cr: 10
ac: 17
hp: 178
hit_dice: '17d10 + 85'
speed: '30 ft.'
stats:
    - 22
    - 10
    - 20
    - 3
    - 12
    - 1
damage_immunities: 'poison, psychic; damage from nonmagical, non-adamantine weapons'
condition_immunities: 'charmed, fatigue, frightened, paralyzed, petrified, poisoned'
senses: 'darkvision 120 ft., passive Perception 11'
languages: "understands the languages of its creator but can't speak"
traits:
    - { name: 'Immutable Form', desc: 'The guardian is immune to any effect that would alter its form.' }
    - { name: 'Magic Resistance', desc: 'The guardian has advantage on saving throws against spells and magical effects.' }
    - { name: 'Constructed Nature', desc: "Guardians don't require air, sustenance, or sleep." }
actions:
    - { name: Multiattack, desc: 'The guardian attacks twice with its slam.' }
    - { name: Slam, desc: 'Melee Weapon Attack: +10 to hit, reach 5 ft., one target. Hit: 19 (3d8 + 6) bludgeoning damage.' }
    - { name: Rock, desc: 'Ranged Weapon Attack: +10 to hit, range 60/240 ft., one target. Hit: 30 (7d6 + 6) bludgeoning damage. The target makes a DC 18 Strength saving throw, falling prone on a failure.' }
'bonus actions':
    - { name: 'Slow (Recharge 56)', desc: 'The guardian targets one or more creatures within 30 feet. Each target makes a DC 17 Wisdom saving throw. On a failure, the target is slowed for 1 minute. A target can repeat the saving throw at the end of each of its turns, ending the effect on itself on a success.' }
combat:
    - { name: "The stone guardian's strategy is determined by its programming", desc: "Most commonly, it attacks the closest enemy first. It moves to include at least two creatures within range before using Slow. It throws a rock or other object if it can't reach an enemy on its turn." }

---
```statblock
monster: Stone Guardian - A5E
```
