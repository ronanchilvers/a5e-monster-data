---
statblock: true
name: 'Drop Bear'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Beast
cr: 3
ac: 12
hp: 42
hit_dice: 5d10+15
speed: '40 ft., climb 40 ft.'
stats:
    - 20
    - 10
    - 16
    - 2
    - 12
    - 4
skillsaves:
    - { perception: 3 }
senses: 'passive Perception 13'
traits:
    - { name: 'Keen Smell', desc: 'The bear has advantage on Perception checks that rely on smell.' }
    - { name: Stealthy, desc: 'The drop bear has advantage on Stealth checks in forested areas.' }
    - { name: Drop, desc: 'The drop bear takes no damage from falling 40 feet or fewer and deals an extra 7 (2d6) damage when it hits with an attack after falling at least 20 feet. A creature that takes this extra damage is knocked prone.' }
actions:
    - { name: Multiattack, desc: 'The bear makes two melee attacks.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 9 (1d8+5) piercing damage.' }
    - { name: Claws, desc: "Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 7 (1d4+5) slashing damage. If the target is a Medium or smaller creature, it is grappled (escape DC 15). Until this grapple ends, the bear can't attack a different target with its claws." }

---
```statblock
monster: Drop Bear
```
