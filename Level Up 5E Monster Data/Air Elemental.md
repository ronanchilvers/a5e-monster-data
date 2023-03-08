---
statblock: true
name: 'Air Elemental'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Elemental
cr: 5
ac: 14
hp: 90
hit_dice: '12d10 + 24'
speed: '0 ft., fly 90 ft.'
stats:
    - 10
    - 18
    - 14
    - 6
    - 10
    - 6
damage_resistances: 'lightning, thunder; damage from nonmagical weapons'
damage_immunities: poison
condition_immunities: 'fatigue, grappled, paralyzed, petrified, poisoned, prone, restrained, stunned, unconscious'
senses: 'darkvision 60 ft., passive Perception 10'
languages: Auran
traits:
    - { name: 'Air Form', desc: "The elemental can enter and end its turn in other creatures' spaces and pass through an opening as narrow as 1 inch wide without squeezing." }
    - { name: 'Elemental Nature', desc: "An elemental doesn't require air, sustenance, or sleep." }
actions:
    - { name: Multiattack, desc: 'The elemental makes two slam attacks.' }
    - { name: Slam, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 14 (3d6 + 4) bludgeoning damage.' }
    - { name: 'Whirlwind (Recharge 56)', desc: "The elemental takes the form of a whirlwind, flies up to half of its fly speed without provoking opportunity attacks, and then resumes its normal form. When a creature shares its space with the whirlwind for the first time during this movement, that creature makes a DC 15 Strength saving throw. On a failure, the creature is carried inside the elemental's space until the whirlwind ends, taking 3 (1d6) bludgeoning damage for each 10 feet it is carried, and falls prone at the end of the movement. The whirlwind can carry one Large creature or up to four Medium or smaller creatures." }
combat:
    - { name: 'The elemental uses Whirlwind when it can scoop up at least three creatures', desc: 'If possible, it ends this movement in the air so creatures inside it take additional falling damage. Otherwise, it makes a slam attack on creatures within its reach or sharing its space. Elementals retreat only if ordered to do so.' }

---
```statblock
monster: Air Elemental
```
