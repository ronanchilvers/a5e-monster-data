---
statblock: true
name: 'Zombie Horde - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Undead
cr: 4
ac: 8
hp: 75
hit_dice: '10d8 + 30'
speed: '20 ft.'
stats:
    - 12
    - 6
    - 16
    - 3
    - 6
    - 4
damage_immunities: poison
condition_immunities: 'fatigue, poisoned'
'damage vulenrabilities': bludgeoning
senses: 'darkvision 60 ft., passive Perception 8'
languages: "understands the languages it knew in life but can't speak"
traits:
    - { name: 'Area Vulnerability', desc: 'The horde takes double damage from any effect that targets an area.' }
    - { name: Horde, desc: 'The horde is composed of 5 or more zombies. If it is subjected to a spell, attack, or other effect that affects only one target, it takes any damage but ignores other effects. It can share its space with Medium or smaller creatures or objects. The horde can move through any opening large enough for one Medium creature without squeezing.' }
    - { name: 'Horde Dispersal', desc: 'When the horde is reduced to 0 hit points, it turns into 2 (1d4) zombies with 7 hit points each.' }
    - { name: 'Undead Nature', desc: "A zombie doesn't require air, sustenance, or sleep." }
actions:
    - { name: Grab, desc: 'Melee Weapon Attack: +3 to hit, reach 5 ft., one target. Hit: 22 (5d6 + 5) bludgeoning damage. If the target is a Medium or smaller creature, it is grappled (escape DC 11).' }
    - { name: Bite, desc: 'Melee Weapon Attack: +3 to hit, reach 5 ft., one grappled target. Hit: 32 (5d10 + 5) piercing damage, and the horde regains the same number of hit points.' }

---
```statblock
monster: Zombie Horde - A5E
```
