---
statblock: true
name: 'Zombie Knight'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Undead
cr: 3
ac: 16
hp: 52
hit_dice: '8d8 + 16'
speed: '20 ft.'
stats:
    - 16
    - 6
    - 14
    - 3
    - 8
    - 4
damage_immunities: poison
condition_immunities: 'fatigue, poisoned'
senses: 'darkvision 60 ft., passive Perception 9'
languages: "understands one language but can't speak"
traits:
    - { name: 'Undead Fortitude (1/Day)', desc: "If the zombie is reduced to 0 hit points by damage that isn't radiant or from a critical hit, it's instead reduced to 1 hit point, falls prone, and is stunned until the end of its next turn, appearing to be dead." }
    - { name: 'Undead Nature', desc: "A zombie doesn't require air, sustenance, or sleep." }
actions:
    - { name: Multiattack, desc: 'The zombie makes two melee attacks.' }
    - { name: Greatsword, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 10 (2d6 + 3) slashing damage.' }
    - { name: Grab, desc: "Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 6 (1d6 + 3) bludgeoning damage, and the creature is grappled if it's Medium or smaller (escape DC 13), and until the grapple ends, the zombie can't grab another target." }
    - { name: Bite, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one creature grappled by a zombie. Hit: 8 (1d10 + 3) piercing damage, and the zombie regains hit points equal to the damage dealt.' }

---
```statblock
monster: Zombie Knight
```
