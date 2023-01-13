---
statblock: true
name: 'Remorhaz Spawn - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Monstrosity
cr: 5
ac: 14
hp: 95
hit_dice: '10d10 + 40'
speed: '30 ft., burrow 20 ft.'
stats:
    - 18
    - 14
    - 18
    - 4
    - 12
    - 5
damage_immunities: 'cold, fire'
saves:
    intelligence: 0
    wisdom: 4
senses: 'darkvision 60 ft., tremorsense 60 ft., passive Perception 11'
traits:
    - { name: 'Heated Body', desc: "A creature that starts its turn grappled by the remorhaz, touches it, or hits it with a melee attack while within 5 feet takes 3 (1d6) fire damage. A creature can take this damage only once on a turn. If the remorhaz has taken cold damage since the end of its last turn, this trait doesn't function." }
actions:
    - { name: Multiattack, desc: 'The remorhaz makes a bite attack and then a constrict attack.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 11 (2d6 + 4) piercing damage plus 3 (1d6) fire damage.' }
    - { name: Constrict, desc: "Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 11 (2d6 + 4) bludgeoning damage, and the target is subjected to the remorhaz's Heated Body trait. The target is grappled (escape DC 15) and restrained while grappled. Until this grapple ends, the remorhaz can't grapple another creature." }
combat:
    - { name: 'The remorhaz spawn ambushes prey, biting and then constricting', desc: 'It flees when bloodied.' }

---
```statblock
monster: Remorhaz Spawn - A5E
```
