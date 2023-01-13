---
statblock: true
name: 'Banshee - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Undead
cr: 4
ac: 13
hp: 58
hit_dice: 13d8
speed: '30 ft., fly 40 ft.'
stats:
    - 8
    - 16
    - 10
    - 12
    - 10
    - 18
damage_resistances: 'acid, fire, lightning, thunder; damage from nonmagical weapons'
damage_immunities: 'cold, necrotic, poison'
condition_immunities: 'charmed, exhaustion, frightened, grappled, paralyzed, petrified, poisoned, prone, restrained'
saves:
    wisdom: 2
senses: 'darkvision 60 ft., Passive Perception 10'
languages: 'the languages it spoke in life'
traits:
    - { name: 'Death Howl', desc: 'When reduced to 0 hit points, the banshee uses Baleful Wail.' }
    - { name: 'Detect Life', desc: 'The banshee magically senses the general direction of living creatures up to 5 miles away.' }
    - { name: 'Incorporeal Movement', desc: 'The banshee can move through creatures and objects. It takes 5 (1d10) force damage if it ends its turn inside an object.' }
    - { name: 'Undead Nature', desc: "A banshee doesn't require air, sustenance, or sleep." }
    - { name: 'Unquiet Spirit', desc: 'If defeated in combat, the banshee returns on the anniversary of its death. It can be permanently put to rest only by finding and casting remove curse on its grave or by righting whatever wrong was done to it.' }
actions:
    - { name: 'Presage Death', desc: "The banshee targets a creature within 60 feet that can hear it, predicting its doom. The target makes a DC 14 Wisdom saving throw. On a failure, the target takes 11 (2d6 + 4) psychic damage and is magically cursed for 1 hour. While cursed in this way, the target has disadvantage on saving throws against the banshee's Baleful Wail." }
    - { name: 'Baleful Wail', desc: 'The banshee shrieks. All living creatures within 30 feet of it that can hear it make a DC 14 Constitution saving throw. On a failure, a creature takes 11 (2d6 + 4) psychic damage. If the creature is cursed by the banshee, it drops to 0 hit points instead.' }
reactions:
    - { name: 'Wounded Warning', desc: 'When the banshee takes damage from a creature within 60 feet, it uses Presage Death on the attacker.' }
combat:
    - { name: 'The banshee begins combat by using Presage Death', desc: 'It uses Wail whenever a cursed creature is within 30 feet, and otherwise uses Presage Death on a creature not yet under its curse.' }

---
```statblock
monster: Banshee - A5E
```
