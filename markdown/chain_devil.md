---
statblock: true
name: 'Chain Devil - A5E'
source: 'Level Up: Monstrous Menagerie'
size: Medium
type: Fiend
cr: 9
ac: 17
hp: 127
hit_dice: '15d8 + 60'
speed: '40 ft.'
stats:
    - 18
    - 14
    - 18
    - 10
    - 12
    - 16
damage_resistances: 'cold; damage from nonmagical, non-silvered weapons'
damage_immunities: 'fire, poison'
condition_immunities: poisoned
saves:
    constitution: 8
    wisdom: 5
    charisma: 7
skillsaves:
    survival: 5
senses: 'darkvision 120 ft., passive Perception 12'
languages: 'Infernal, telepathy 120 ft.'
traits:
    - { name: "Devil's Sight", desc: "The devil's darkvision penetrates magical darkness." }
    - { name: 'Lawful Evil', desc: 'The devil radiates a Lawful and Evil aura.' }
    - { name: 'Magic Resistance', desc: 'The devil has advantage on saving throws against spells and magical effects.' }
    - { name: 'Rattling Chains', desc: 'Whenever the devil moves, the rattling of its chains can be heard up to 300 feet away, unless it moves at half its Speed.' }
    - { name: 'Relentless Tracker', desc: 'Once the devil has grappled a creature in its chains, it has advantage on ability checks made to track that creature for the next 30 days.' }
actions:
    - { name: Multiattack, desc: 'The chain devil makes two chain attacks and commands up to two animated chains under its control to make chain attacks.' }
    - { name: Chain, desc: 'Melee Weapon Attack: +8 to hit, reach 15 ft., one target. Hit: 14 (2d8 + 5) slashing damage. If the target is a creature, it is grappled (escape DC 16) and restrained. Until the grapple ends, this chain can only attack the grappled target.' }
reactions:
    - { name: 'Unnerving Mask', desc: "When damaged by a creature within 30 feet that can see the devil, the devil momentarily assumes the magical illusory form of one of the attacker's enemies or loved ones, alive or dead. The illusory figure may speak words that only the attacker can hear. The attacker makes a DC 15 Wisdom saving throw. On a failure, it takes 9 (2d8) psychic damage and is frightened until the end of its next turn.The attacker is then immune to this effect for the next 24 hours." }
'bonus actions':
    - { name: 'Animate Chain', desc: "One inanimate, unattended chain within 60 feet sprouts blades and magically animates under the devil's control for 1 hour. It has AC 20 and 20 hit points, a Speed of 0, and immunity to psychic, piercing, poison, and thunder damage. When the devil uses Multiattack, the devil may command the chain to make one Chain attack against a target within 15 feet of it. If the chain is reduced to 0 hit points, it can't be reanimated." }
combat:
    - { name: 'The chain devil prefers locations festooned with chains', desc: "On its first and second turns, it animates a chain near its enemies and then attacks. Though it can't make more than four chain attacks at a time, it animates a new chain whenever it can, so as to have as many attack options as possible. The devil uses Unnerving Mask once against each attacker. The chain devil fights to the death. It may let defeated creatures escape for the joy of hunting them." }

---
```statblock
monster: Chain Devil - A5E
```
