---
statblock: true
name: 'Pit Fiend General - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Huge
type: Fiend
cr: 20
ac: 19
hp: 600
hit_dice: '48d10 + 336'
speed: '30 ft., fly 60 ft.'
stats:
    - 26
    - 16
    - 24
    - 22
    - 18
    - 24
damage_resistances: 'cold; damage from nonmagical, non-silvered weapons'
damage_immunities: 'fire, poison'
condition_immunities: poisoned
saves:
    - { dexterity: 9 }
    - { constitution: 13 }
    - { intelligence: 12 }
    - { wisdom: 10 }
    - { charisma: 13 }
skillsaves:
    - { athletics: 14 }
    - { insight: 10 }
    - { perception: 10 }
senses: 'truesight 120 ft., passive Perception 21'
languages: 'Infernal, telepathy 120 ft.'
traits:
    0: { name: 'Fear Aura', desc: "A creature hostile to the pit fiend that starts its turn within 20 feet of it makes a DC 18 Wisdom saving throw. On a failure, it is frightened until the start of its next turn. On a success, it is immune to this pit fiend's Fear Aura for 24 hours." }
    1: { name: 'Innate Spellcasting', desc: "The pit fiend's spellcasting ability is Wisdom (spell save DC 18). It can innately cast the following spells, requiring no material components:" }
    traits: ['At will: detect magic, fireball', '3/day each: hold monster, sending']
    2: { name: 'Lawful Evil', desc: 'The pit fiend radiates a Lawful and Evil aura.' }
    3: { name: 'Magic Resistance', desc: 'The pit fiend has advantage on saving throws against spells and magical effects.' }
    4: { name: 'Elite Recovery', desc: 'At the end of each of its turns while bloodied, the pit fiend ends one negative effect currently affecting it. It can do so as long as it has at least 1 hit point, even while unconscious or incapacitated.' }
    5: { name: Reactive, desc: "The pit fiend can take a reaction on each creature's turn." }
actions:
    - { name: Multiattack, desc: 'The pit fiend attacks with its bite and mace.' }
    - { name: Bite, desc: "Melee Weapon Attack: +14 to hit, reach 5 ft., one target. Hit: 22 (4d6 + 8) piercing damage. If the target is a creature, it makes a DC 20 Constitution saving throw. On a failure, it is poisoned for 1 minute. While poisoned in this way, the target can't regain hit points and takes 21 (6d6) ongoing poison damage at the start of each of its turns. The target can repeat this saving throw at the end of each of its turns, ending the effect on a success." }
    - { name: Mace, desc: 'Melee Weapon Attack: +14 to hit, reach 10 ft., one target. Hit: 22 (4d6 + 8) bludgeoning damage plus 21 (6d6) fire damage. If the target is a Medium or smaller creature, it makes a DC 22 Strength saving throw. On a failure, it is pushed 15 feet away from the pit fiend and knocked prone.' }
    - { name: 'Circle of Fire (1/Day, While Bloodied)', desc: 'A 15-foot-tall, 1-foot-thick, 20-foot-diameter ring of fire appears around the pit fiend, with the pit fiend at the center. The fire is opaque to every creature except the pit fiend. When the ring of fire appears, each creature it intersects makes a DC 18 Dexterity saving throw, taking 22 (5d8) fire damage on a failed save or half damage on a successful one. A creature takes 22 (5d8) damage the first time each turn it enters the area or when it ends its turn there. The fire lasts 1 minute or until the pit fiend dismisses it, becomes incapacitated, or leaves its area.' }
    - { name: 'Fireball (3rd-Level; V, S)', desc: 'Fire streaks from the pit fiend to a point within 120 feet and explodes in a 20-foot radius, spreading around corners. Each creature in the area makes a DC 18 Dexterity saving throw, taking 21 (6d6) fire damage on a failed save or half damage on a success.' }
    - { name: 'Hold Monster (5th-Level; V, S, Concentration)', desc: 'A creature within 60 feet that the pit fiend can see makes a DC 18 Wisdom saving throw. On a failure, it is paralyzed for 1 minute. The creature repeats the save at the end of each of its turns, ending the effect on a success.' }
reactions:
    reactions: ['The pit fiend has the following reactions, which it can use only while bloodied:']
    0: { name: 'Vengeful Strike', desc: 'When the pit fiend is hit by a melee attack on any turn but its own, it makes a claw or tail attack against the attacker.' }
    1: { name: Fireball, desc: 'When the pit fiend is damaged by an area spell cast by a creature within 120 feet that it can see, it uses Fireball, centering the fireball on the caster of the triggering spell.' }
    2: { name: 'Hold Monster', desc: 'When the pit fiend is hit by a ranged melee or spell attack, it uses Hold Monster on the attacker.' }
'bonus actions':
    - { name: Claw, desc: "Melee Weapon Attack: +14 to hit, reach 10 ft., one creature. Hit: 19 (2d10 + 8) slashing damage, and the target is grappled (escape DC 22). While the target is grappled, the pit fiend can't use its claw against a different creature." }
    - { name: Tail, desc: 'Melee Weapon Attack: +14 to hit, reach 10 ft., one target. Hit: 24 (3d10 + 8) bludgeoning damage.' }
combat:
    - { name: "The pit fiend prefers to bite opponents that haven't yet been poisoned", desc: 'If three or more enemies are gathered together, it may instead use Fireball.' }
    - { name: "For its bonus action, the pit fiend attacks with its tail unless it's near a weak melee attacker, in which case it grapples with its claw", desc: '' }
    - { name: 'When the pit fiend is bloodied, it flies to the nearest ranged attacker and uses Circle of Fire, which blocks line of sight for many enemies and prevents creatures from easily escaping it', desc: 'While fighting in the circle, it uses its Mace attack to push opponents through the flames, forcing them to take even more damage if they run back through the flames to reach the pit fiend.' }

---
```statblock
monster: Pit Fiend General - A5E
```
