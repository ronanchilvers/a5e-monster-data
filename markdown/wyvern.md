---
statblock: true
name: 'Wyvern - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Dragon
cr: 6
ac: 13
hp: 110
hit_dice: '13d10 + 39'
speed: '20 ft., fly 80 ft.'
stats:
    - 18
    - 10
    - 16
    - 5
    - 12
    - 6
skillsaves:
    perception: 4
senses: 'darkvision 60 ft., passive Perception 14'
languages: "understands Draconic but can't speak"
traits:
    - { name: 'Imperfect Flight', desc: "While bloodied, the wyvern's fly speed is halved, and it can't gain altitude." }
actions:
    - { name: Multiattack, desc: 'The wyvern attacks once with its bite and once with its stinger. While flying, it can use its claws in place of one other attack.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +7 to hit, reach 10 ft., one target. Hit: 13 (2d8 + 4) piercing damage.' }
    - { name: Claws, desc: "Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 9 (2d4 + 4) slashing damage. If the wyvern is attacking from above, the target is grappled by the wyvern (escape DC 15). While grappling a target in this way, the wyvern's Speed is reduced to 0, it can't use its claws to attack any other creature, and it has advantage on attacks against the target." }
    - { name: Stinger, desc: 'Melee Weapon Attack: +7 to hit, reach 10 ft., one creature. Hit: 11 (2d6 + 4) piercing damage. The target makes a DC 15 Constitution saving throw, taking 24 (7d6) poison damage on a failure or half damage on a success.' }
combat:
    - { name: 'A wyvern begins combat by attacking from above, using its claws and stinger', desc: 'When bloodied, it lands and attacks with its bite and stinger. It flees only if it is blinded, poisoned, or afflicted with some other condition that reduces its combat capacity.' }

---
```statblock
monster: Wyvern - A5E
```
