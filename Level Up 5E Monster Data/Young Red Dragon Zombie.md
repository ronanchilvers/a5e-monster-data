---
statblock: true
name: 'Young Red Dragon Zombie'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Undead
cr: 11
ac: 16
hp: 178
hit_dice: '17d10 + 85'
speed: '30 ft., climb 30 ft., fly 70 ft.'
stats:
    - 22
    - 6
    - 20
    - 3
    - 8
    - 4
damage_immunities: 'fire, poison'
senses: 'blindsight 30 ft., darkvision 120 ft., passive Perception 9'
languages: "understands Common and Draconic but can't speak"
traits:
    - { name: 'Undead Fortitude (1/Day)', desc: "If the zombie is reduced to 0 hit points by damage that isn't radiant or from a critical hit, it's instead reduced to 1 hit point, falls prone, and is stunned until the end of its next turn, appearing to be dead." }
    - { name: 'Undead Nature', desc: "A zombie doesn't require air, sustenance, or sleep." }
actions:
    - { name: Multiattack, desc: 'The dragon attacks once with its bite and twice with its claws.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +10 to hit, reach 10 ft., one target. Hit: 22 (3d10 + 6) piercing damage plus 4 (1d8) fire damage.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +10 to hit, reach 5 ft., one target. Hit: 15 (2d8 + 6) slashing damage.' }
    - { name: 'Fire Breath (Recharge 56)', desc: 'The dragon exhales a blast of fire that fills a 30-foot cone. Each creature in that area makes a DC 17 Dexterity saving throw, taking 52 (15d6) fire damage on a failed save or half damage on a success. A creature that fails the saving throw also suffers 5 (1d10) ongoing fire damage. While affected by this ongoing damage, it is frightened of the dragon. A creature can use an action to end the ongoing damage.' }

---
```statblock
monster: Young Red Dragon Zombie
```
