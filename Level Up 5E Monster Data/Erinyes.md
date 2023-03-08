---
statblock: true
name: Erinyes
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Fiend
cr: 12
ac: 18
hp: 161
hit_dice: '19d8 + 76'
speed: '30 ft., fly 60 ft.'
stats:
    - 18
    - 18
    - 18
    - 14
    - 16
    - 18
damage_resistances: 'cold; damage from nonmagical, non-silvered weapons'
damage_immunities: 'fire, poison'
condition_immunities: poisoned
saves:
    - { dexterity: 8 }
    - { constitution: 8 }
    - { wisdom: 7 }
    - { charisma: 8 }
skillsaves:
    - { athletics: 8 }
    - { insight: 7 }
    - { perception: 7 }
senses: 'truesight 120 ft., passive Perception 17'
languages: 'Infernal, telepathy 120 ft.'
traits:
    - { name: 'Lawful Evil', desc: 'The erinyes radiates a Lawful and Evil aura.' }
    - { name: 'Magic Resistance', desc: 'The erinyes has advantage on saving throws against spells and magical effects.' }
actions:
    - { name: Multiattack, desc: 'The erinyes makes three attacks.' }
    - { name: Longsword, desc: 'Melee Weapon Attack: +8 to hit, reach 5 ft., one target. Hit: 8 (1d8 + 4) slashing damage plus 14 (4d6) poison damage.' }
    - { name: Longbow, desc: 'Ranged Weapon Attack: +8 to hit, range 150/600 ft., one target. Hit: 8 (1d8 + 4) piercing damage plus 14 (4d6) poison damage, and the target makes a DC 14 Constitution saving throw. On a failure, it is poisoned for 24 hours or until the poison is removed by lesser restoration or similar magic.' }
    - { name: Lasso, desc: "Melee Weapon Attack: +8 to hit, reach 15 ft., one target. Hit: The target is entangled by the lasso. While entangled, it can't move more than 15 feet away from the erinyes. The entanglement ends if the erinyes releases the lasso or becomes incapacitated, or if the lasso is destroyed. The lasso is an object with AC 12 and 20 HP and is immune to piercing, poison, psychic, and thunder damage. The entanglement also ends if the target or a creature within 5 feet of it uses an action to succeed on a DC 16 Athletics or Acrobatics check to remove the lasso. The erinyes can't make a lasso attack while a creature is entangled." }
reactions:
    - { name: Parry, desc: 'If the erinyes is wielding a longsword and can see its attacker, it adds 4 to its AC against one melee attack that would hit it.' }
combat:
    - { name: 'The erinyes attacks from the air, weakening its foes with volleys of arrows', desc: "Once its foe is poisoned, it attacks with its longsword. It uses its lasso if its quarry tries to flee. It may also use its lasso to entangle a melee combatant with no ranged attack, lifting the creature into the air to keep it away from the devil's more vulnerable allies." }

---
```statblock
monster: Erinyes
```
