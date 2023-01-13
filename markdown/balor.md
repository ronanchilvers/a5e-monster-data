---
statblock: true
name: 'Balor - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Fiend
cr: 19
ac: 19
hp: 299
hit_dice: '26d12 + 130'
speed: '40 ft., fly 80 ft.'
stats:
    - 26
    - 18
    - 20
    - 20
    - 20
    - 22
damage_resistances: 'cold, lightning; damage from nonmagical weapons'
damage_immunities: 'fire, poison'
condition_immunities: poisoned
saves:
    - { strength: 14 }
    - { dexterity: 10 }
    - { constitution: 11 }
    - { wisdom: 11 }
    - { charisma: 12 }
skillsaves:
    - { intimidation: 12 }
    - { perception: 11 }
senses: 'truesight 120 ft., passive Perception 21'
languages: 'Abyssal, telepathy 120 ft.'
traits:
    - { name: 'Chaotic Evil', desc: 'The balor radiates a Chaotic and Evil aura.' }
    - { name: 'Death Throes', desc: 'When the balor dies, it explodes. Each creature within 30 feet makes a DC 19 Dexterity saving throw, taking 52 (15d6) fire damage on a failed save or half damage on a success. ' }
    - { name: 'Fire Aura', desc: "At the start of the balor's turn, each creature within 10 feet takes 10 (3d6) fire damage. A creature that touches the balor or hits it with a melee attack takes 10 (3d6) fire damage." }
    - { name: 'Magic Resistance', desc: 'The balor has advantage on saving throws against spells and magical effects.' }
actions:
    - { name: Multiattack, desc: 'The balor attacks with its lightning sword and its fire whip.' }
    - { name: 'Lightning Sword', desc: 'Melee Weapon Attack: +14 to hit, reach 10 ft., one target. Hit: 21 (3d8 + 8) slashing damage plus 18 (4d8) lightning damage.' }
    - { name: 'Fire Whip', desc: 'Melee Weapon Attack: +14 to hit, reach 45 ft., one target. Hit: 18 (3d6 + 8) slashing damage plus 14 (4d6) fire damage, and the target makes a DC 19 Strength saving throw. On a failure, it is pulled up to 40 feet towards the balor.' }
    - { name: 'Whip Crack (1/Day)', desc: 'A 90-foot cone of thunderous flame emanates from the balor. Each creature in the area makes a DC 19 Constitution saving throw, taking 28 (8d6) fire damage and 28 (8d6) thunder damage and falling prone on a failed save or taking half damage on a successful one.' }
    - { name: Teleport, desc: 'The balor magically teleports to a space within 120 feet that it can see.' }
reactions:
    - { name: 'Instinctive Teleport', desc: 'After the balor takes damage, it uses Teleport.' }
combat:
    - { name: 'The balor uses its fast flying speed, Instinctive Teleport, and its fire whip to keep would-be ranged attackers within its Fire Aura', desc: 'It uses Whip Crack on clusters of foes. If obviously outmatched, it uses Instinctive Teleport and flies away.' }

---
```statblock
monster: Balor - A5E
```
