---
statblock: true
name: 'Clay Guardian'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Construct
cr: 9
ac: 14
hp: 133
hit_dice: '14d10 + 56'
speed: '25 ft.'
stats:
    - 20
    - 10
    - 18
    - 3
    - 10
    - 1
damage_immunities: 'acid, poison, psychic; damage from nonmagical, non-adamantine weapons'
condition_immunities: 'charmed, fatigue, frightened, paralyzed, petrified, poisoned'
senses: 'darkvision 60 ft., passive Perception 10'
languages: "understands the languages of its creator but can't speak"
traits:
    - { name: 'Constructed Nature', desc: "Guardians don't require air, sustenance, or sleep." }
actions:
    - { name: Multiattack, desc: 'The guardian attacks twice with its slam.' }
    - { name: Slam, desc: 'Melee Weapon Attack: +9 to hit, reach 5 ft., one target. Hit: 16 (2d10 + 5) bludgeoning damage. If the target is a creature, it makes a DC 15 Constitution saving throw. On a failure, its hit point maximum is reduced by an amount equal to the damage dealt. The target dies if its hit point maximum is reduced to 0. A greater restoration spell or similar magic removes the reduction.' }
combat:
    - { name: "The guardian's strategy is determined by its programming", desc: 'It may attack the closest enemy, or it may be instructed to attack only certain targets, such as the first one to touch an item it was protecting.' }

---
```statblock
monster: Clay Guardian
```
