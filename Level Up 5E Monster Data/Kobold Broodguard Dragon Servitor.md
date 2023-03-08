---
statblock: true
name: 'Kobold Broodguard Dragon Servitor'
source: 'Level Up: Monstrous Menagerie'
size: Small
type: Humanoid
cr: 2
ac: 16
hp: 44
hit_dice: '8d6 + 16'
speed: '25 ft.'
stats:
    - 14
    - 14
    - 14
    - 10
    - 10
    - 12
senses: 'darkvision 60 ft., passive Perception 10'
languages: 'Common, Draconic'
traits:
    - { name: 'Pack Tactics', desc: "The kobold has advantage on attack rolls against a creature if at least one of the kobold's allies is within 5 feet of the creature and not incapacitated." }
    - { name: 'Sunlight Sensitivity', desc: 'While in sunlight, the kobold has disadvantage on attack rolls, as well as on Perception checks that rely on sight.' }
    - { name: "Dragon's Blood", desc: "The kobold gains resistance to the damage type of its master's breath weapon." }
    - { name: 'Ominous Shadow', desc: 'The kobold loses its Sunlight Sensitivity trait while within 60 feet of its master.' }
    - { name: 'Draconic Smite', desc: "If the broodguard has advantage on a melee weapon attack, the attack deals an extra 1d4 damage. This bonus damage is the same type as its master's breath weapon." }
actions:
    - { name: Multiattack, desc: 'The kobold makes a bill hook attack and a spiked shield attack.' }
    - { name: 'Bill Hook', desc: 'Melee Weapon Attack: +4 to hit, reach 10 ft., one target. Hit: 5 (1d6 + 2) slashing damage, and if the target is a Medium or smaller creature, it makes a DC 12 Strength saving throw, falling prone on a failure.' }
    - { name: 'Spiked Shield', desc: 'Melee Weapon Attack: +4 to hit, reach 5 ft., one target. Hit: 5 (1d6 + 2) piercing damage.' }
    - { name: Sling, desc: 'Ranged Weapon Attack: +4 to hit, range 30/120 ft., one target. Hit: 4 (1d4 + 2) bludgeoning damage.' }
reactions:
    - { name: 'Rally! (1/Day, While Bloodied)', desc: 'When the kobold takes damage, it shouts a rallying cry. All kobolds within 30 feet that can hear it gain immunity to the frightened condition for 1 minute, and their next attack roll made before this effect ends deals an extra 1d4 damage.' }

---
```statblock
monster: Kobold Broodguard Dragon Servitor
```
