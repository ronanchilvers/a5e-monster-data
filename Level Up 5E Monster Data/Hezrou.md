---
statblock: true
name: Hezrou
source: 'Level Up: Monstrous Menagerie'
size: Large
type: Fiend
cr: 10
ac: 16
hp: 136
hit_dice: '13d10 + 65'
speed: '40 ft.'
stats:
    - 18
    - 16
    - 20
    - 8
    - 12
    - 12
damage_resistances: 'cold, fire, lightning; damage from nonmagical weapons'
damage_immunities: poison
condition_immunities: poisoned
saves:
    - { strength: 7 }
    - { constitution: 8 }
    - { intelligence: 2 }
    - { wisdom: 4 }
senses: 'darkvision 120 ft., passive Perception 11'
languages: 'Abyssal, telepathy 120 ft.'
traits:
    - { name: 'Chaotic Evil', desc: 'The hezrou radiates a Chaotic and Evil aura.' }
    - { name: 'Magic Resistance', desc: 'The hezrou has advantage on saving throws against spells and magical effects.' }
actions:
    - { name: Multiattack, desc: 'The hezrou makes one attack with its bite and one with its claws.' }
    - { name: Bite, desc: "Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 15 (2d10 + 4) piercing damage. If the target is a Medium or smaller creature, it is grappled (escape DC 15). Until this grapple ends, the target is restrained, and the hezrou can't bite another target." }
    - { name: Claws, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 22 (4d8 + 4) slashing damage.' }
    - { name: Swallow, desc: 'The hezrou makes a bite attack against a Medium or smaller creature it is grappling. If the attack hits and the hezrou has not swallowed another creature, the target is swallowed and the grapple ends. A swallowed creature has total cover from attacks from outside the hezrou, it is blinded and restrained, and it takes 17 (5d6) ongoing acid damage while swallowed.' }
    - { name: 'If a swallowed creature deals 25 or more damage to the hezrou in a single turn, or if the hezrou dies, the hezrou vomits up the creature', desc: '' }
    - { name: Darkness, desc: "Magical darkness spreads from a point within 30 feet, filling a 15-foot-radius sphere and spreading around corners. It remains for 1 minute, until the hezrou dismisses it, or until the hezrou uses this ability again. A creature with darkvision can't see through this darkness and nonmagical light can't illuminate it." }
reactions:
    - { name: 'Stench (1/Day)', desc: 'When hit by a melee attack, the hezrou emits a cloud of foul-smelling poison gas in a 20-foot radius. Each creature in the area makes a DC 14 Constitution saving throw. On a failure, a creature is poisoned for 1 minute. A creature can repeat this saving throw at the end of each of its turns, ending the effect on itself on a success' }
combat:
    - { name: 'The hezrou makes melee attacks with its bite and claws, swallowing an opponent when possible', desc: 'It uses Darkness if not close enough to attack anyone. It fights to the death.' }

---
```statblock
monster: Hezrou
```
