---
statblock: true
name: 'Barbed Devil - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Fiend
cr: 5
ac: 15
hp: 102
hit_dice: '12d8 + 48'
speed: '30 ft.'
stats:
    - 18
    - 16
    - 18
    - 12
    - 14
    - 14
damage_resistances: 'cold; damage from nonmagical, non-silvered weapons'
damage_immunities: 'fire, poison'
condition_immunities: poisoned
saves:
    - { strength: 7 }
    - { constitution: 7 }
    - { wisdom: 5 }
    - { charisma: 5 }
skillsaves:
    - { athletics: 7 }
    - { deception: 5 }
    - { insight: 5 }
    - { perception: 5 }
senses: 'darkvision 120 ft., passive Perception 17'
languages: 'Infernal, telepathy 120 ft.'
traits:
    - { name: 'Barbed Hide', desc: "A creature that grapples or is grappled by the devil takes 5 (1d10) piercing damage at the beginning of the devil's turn." }
    - { name: "Devil's Sight", desc: "The devil's darkvision penetrates magical darkness." }
    - { name: 'Lawful Evil', desc: 'The devil radiates a Lawful and Evil aura.' }
    - { name: 'Magic Resistance', desc: 'The devil has advantage on saving throws against spells and magical effects.' }
actions:
    - { name: Multiattack, desc: 'The devil makes two attacks with its claws and one with its tail. Alternatively, it uses Hurl Flame twice.' }
    - { name: Claws, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target. Hit: 7 (1d8 + 3) piercing damage. If both claw attacks hit the same Medium or smaller creature, it is grappled (escape DC 15). While the target is grappled, this attack may be used only against the grappled creature and has advantage against that creature.' }
    - { name: Tail, desc: 'Melee Weapon Attack: +7 to hit, reach 5 ft., one target the devil is not grappling. Hit: 10 (2d6 + 3) piercing damage.' }
    - { name: 'Hurl Flame', desc: 'Ranged Spell Attack: +6 to hit, range 150 ft., one target. Hit: 10 (3d6) fire damage. If the target is a creature, it catches on fire, taking 5 (1d10) ongoing fire damage. If the target is an unattended flammable object, it catches on fire. A creature can use an action to extinguish this fire.' }
combat:
    - { name: 'The barbed devil grapples a creature and holds it tight, using its tail to fend off other attackers', desc: 'Until it closes with its enemy, it hurls flame. A barbed devil follows instructions from its superiors and never deserts a post or abandons a pursuit.' }

---
```statblock
monster: Barbed Devil - A5E
```
