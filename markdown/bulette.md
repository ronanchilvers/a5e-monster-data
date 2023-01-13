---
statblock: true
name: 'Bulette - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Monstrosity
cr: 6
ac: 17
hp: 95
hit_dice: '10d10 + 40'
speed: '40 ft., burrow 40 ft.'
stats:
    - 18
    - 10
    - 18
    - 2
    - 10
    - 8
saves:
    intelligence: -1
skillsaves:
    perception: 3
senses: 'darkvision 60 ft., tremorsense 60 ft., passive Perception 13'
traits:
    - { name: 'Steely Hide', desc: 'If a creature targets the bulette with a melee attack using a nonmagical weapon and rolls a natural 1 on the attack roll, the weapon breaks.' }
actions:
    - { name: 'Leap (Recharge 56)', desc: 'The bulette leaps up to half its Speed horizontally and half its Speed vertically without provoking opportunity attacks, and can land in a space containing one or more creatures. Each creature in its space when it lands makes a DC 15 Dexterity saving throw, taking 18 (4d6 + 4) bludgeoning damage and being knocked prone on a failure. On a success, the creature takes half damage and is pushed 5 feet to a space of its choice. If that space is occupied, the creature is knocked prone.' }
    - { name: Burrow, desc: 'The bulette burrows under the ground without provoking opportunity attacks, moves up to its burrow speed, and then resurfaces in an unoccupied space. If it is within 5 feet of a creature, it then makes a bite attack.' }
    - { name: Bite, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 30 (4d12 + 4) piercing damage.' }
reactions:
    - { name: 'Jaw Clamp (1/Day)', desc: 'When an attacker within 5 feet of the bulette misses it with a melee attack, the bulette makes a bite attack against the attacker. On a hit, the attacker is grappled (escape DC 15). Until this grapple ends, the grappled creature is restrained, and the only attack the bulette can make is a bite against the grappled creature.' }
    - { name: 'Hard Carapace (1/Day)', desc: 'After taking damage from an attack, the bulette lies down and closes its eyes, protecting all vulnerable spots. Until the beginning of its next turn, its AC becomes 21 and it has advantage on saving throws.' }
combat:
    - { name: 'The bulette targets halflings first', desc: 'The bulette uses Leap if it can land on two or more creatures. Otherwise, it uses Burrow. It fights to the death.' }

---
```statblock
monster: Bulette - A5E
```
