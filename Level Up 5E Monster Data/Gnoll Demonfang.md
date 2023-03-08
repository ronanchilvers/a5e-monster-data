---
statblock: true
name: 'Gnoll Demonfang'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Humanoid
cr: 4
ac: 15
hp: 65
hit_dice: '10d8 + 20'
speed: '40 ft.'
stats:
    - 16
    - 16
    - 14
    - 10
    - 10
    - 12
condition_immunities: 'charmed, frightened'
saves:
    - { constitution: 4 }
    - { wisdom: 2 }
    - { charisma: 3 }
senses: 'darkvision 60 ft., passive Perception 10'
languages: 'Abyssal, Gnoll'
traits:
    - { name: Aligned, desc: 'The gnoll radiates a Chaotic and Evil aura.' }
    - { name: Possessed, desc: 'If the gnoll demonfang is turned or affected by dispel evil and good or a similar effect, it transforms into an ordinary gnoll. Any damage it has taken carries over to its new form. If this damage exceeds its maximum hit points, it dies.' }
actions:
    - { name: Multiattack, desc: 'The gnoll attacks three times with its Charging Claw.' }
    - { name: 'Charging Claw', desc: "Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 6 (1d6 + 3) slashing damage, or 10 (2d6 + 3) slashing damage if this is the gnoll's first attack on this target this turn. The gnoll may then move up to 10 feet without provoking opportunity attacks." }
combat:
    - { name: 'The gnoll charges the largest group of enemies and attacks three different targets if it can, using the extra movement granted by its attack', desc: 'It fights to the death, and gnolls in its presence are likely to do the same.' }

---
```statblock
monster: Gnoll Demonfang
```
