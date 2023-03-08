---
statblock: true
name: Ankheg
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Monstrosity
cr: 2
ac: 14
hp: 45
hit_dice: '6d10 + 12'
speed: '30 ft., burrow 15 ft.'
stats:
    - 16
    - 10
    - 14
    - 2
    - 14
    - 8
damage_resistances: acid
senses: 'tremorsense 30 ft., passive Perception 12'
actions:
    - { name: Claws, desc: "Melee Weapon Attack: +5 to hit, reach 5 ft., one target. Hit: 12 (2d8 + 3) slashing damage. If the target is a Medium or smaller creature, it is grappled (escape DC 13). Until this grapple ends, the target is restrained, and the ankheg can't use its claws on anyone else." }
    - { name: Bite, desc: 'Melee Weapon Attack: +5 to hit, reach 5 ft., one creature grappled by the ankheg. Hit: 16 (3d8 + 3) slashing damage. If this damage kills the target, the ankheg severs its head.' }
    - { name: 'Acid Spray (Recharge 6)', desc: 'The ankheg spits a 30-foot-long, 5-foot-wide stream of acid. Each creature in the area makes a DC 13 Dexterity saving throw, taking 14 (4d6) acid damage on a failure or half damage on a success. If the ankheg is grappling a target, it instead bathes the target in acid, dealing 14 (4d6) acid damage with no saving throw only to that target.' }
combat:
    - { name: 'The ankheg lurks 10 feet underground, waiting for its tremorsense to register movement', desc: 'It bursts out, firing its acid spray and then grabbing and biting the largest target available. It flees if badly hurt, dragging away any creature it has grappled.' }

---
```statblock
monster: Ankheg
```
